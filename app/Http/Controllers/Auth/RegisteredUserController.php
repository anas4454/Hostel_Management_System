<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:'.User::class,
            ],

            'password' => [
                'required',
                'confirmed',
                Rules\Password::defaults(),
            ],

            'role' => [
                'required',
                'string',
                'in:student,parent',
            ],

            'roll_number' => [
                'required',
                'string',
                'max:255',
            ],
        ]);

        /**
         * STUDENT ROLL NUMBER CHECK
         */
        if ($request->role == 'student') {

            $existingStudent = Student::where(
                'roll_number',
                $request->roll_number
            )->first();

            if ($existingStudent) {

                return back()
                    ->withErrors([

                        'roll_number' => 'Roll number already exists.',
                    ])
                    ->withInput();
            }
        }

        /**
         * PARENT STUDENT CHECK
         */
        if ($request->role == 'parent') {

            $student = Student::where(
                'roll_number',
                $request->roll_number
            )->first();

            if (! $student) {

                return back()
                    ->withErrors([

                        'roll_number' => 'Student roll number not found.',
                    ])
                    ->withInput();
            }
        }

        /**
         * CREATE USER
         */
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(
                $request->password
            ),

            'role' => $request->role,
        ]);

        /**
         * CREATE STUDENT PROFILE
         */
        if ($request->role == 'student') {

            Student::create([

                'user_id' => $user->id,

                'parent_id' => null,

                'roll_number' => $request->roll_number,

                'phone' => null,
            ]);
        }

        /**
         * CONNECT PARENT WITH STUDENT
         */
        if ($request->role == 'parent') {

            $student->update([

                'parent_id' => $user->id,
            ]);
        }

        /**
         * REGISTER EVENT
         */
        event(new Registered($user));

        /**
         * LOGIN USER
         */
        Auth::login($user);

        /**
         * REDIRECT BY ROLE
         */
        switch ($user->role) {

            case 'admin':

                return redirect()->route(
                    'admin.dashboard'
                );

            case 'warden':

                return redirect()->route(
                    'warden.dashboard'
                );

            case 'student':

                return redirect()->route(
                    'student.dashboard'
                );

            case 'parent':

                return redirect()->route(
                    'parent.dashboard'
                );
        }

        return redirect()->route('home');
    }
}
