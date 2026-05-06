<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student-dashboard.main');
    }

    public function complaints()
    {
        if (Auth::user()->role === 'student') {
            $complaints = Auth::user()->complaints()->latest()->get();
        }

        return view('student-dashboard.complaints', compact('complaints'));
    }

    public function newComplaint()
    {
        return view('student-dashboard.new-complaint');
    }


     public function storeComplaint(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Auth::user()->complaints()->create([
            'subject' => $request->subject,
            'description' => $request->description,
            'status' => 'Pending',
        ]);

        return redirect()->route('student.complaints')->with('success', 'Complaint submitted successfully!');
    }

    public function feePayment()
    {
        return view('student-dashboard.fee-payment');
    }

    public function newFee()
    {
        return view('student-dashboard.new-fee');
    }

    //  public function storeFee(Request $request)
    // {
    //     $request->validate([
    //         'amount' => 'required|numeric',
    //         'month' => 'required|string|max:255',
    //     ]);

    //     // Here you would typically create a new fee payment record in the database
    //     // For example:
    //     // Auth::user()->fees()->create([
    //     //     'amount' => $request->amount,
    //     //     'month' => $request->month,
    //     //     'status' => 'Pending',
    //     // ]);

    //     return redirect()->route('student.fee-payment')->with('success', 'Fee payment submitted successfully!');
    // }



    public function leave()
    {
        $leaves = Auth::user()->leaves()->latest()->get();

        return view('student-dashboard.leave', compact('leaves'));
    }

    public function newLeave()
    {
        return view('student-dashboard.new-leave');
    }

     public function storeLeave(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required|string',
        ]);

        Auth::user()->leaves()->create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
            'status' => 'Pending',
        ]);

        return redirect()->route('student.leave')->with('success', 'Leave application submitted successfully!');
    }

    public function roomBooking()
    {
        $rooms = Rooms::all();

        return view('student-dashboard.roombooking', compact('rooms'));
    }

    public function profile()
    {
        return view('student-dashboard.student-profile');
    }

    public function messManagement()
    {
        return view('student-dashboard.Mess-Management');
    }
}
