<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\Leave;
use App\Models\Student;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;

class GardianController extends Controller
{
    public function index()
    {

        $parent = Auth::user();

        $student = Student::with([

            'user',
            'user.fees',
            'user.leaves',
            'user.approvals.room',

        ])
            ->where(
                'parent_id',
                $parent->id
            )
            ->first();

        $latestFee = null;

        if ($student && $student->user) {

            $latestFee =
                $student->user
                    ->fees
                    ->sortByDesc('created_at')
                    ->first();
        }

        $pendingLeaves = 0;

        if ($student && $student->user) {

            $pendingLeaves =
                $student->user
                    ->leaves
                    ->where('status', 'Pending')
                    ->count();
        }

        $approvedRoom = null;

        if ($student && $student->user) {

            $approvedRoom =
                $student->user
                    ->approvals
                    ->where('status', 'Approved')
                    ->first();
        }

        return view(
            'parent-dashboard.parent-dashboard',
            compact(
                'student',
                'latestFee',
                'pendingLeaves',
                'approvedRoom'
            )
        );
    }

    public function leaveStatus()
    {

        $parent = Auth::user();

        $student = Student::where('parent_id', $parent->id)->first();

        $leaves = collect();

        if ($student) {
            $leaves = Leave::where('student_id', $student->user_id)->latest()->get();
        }

        // dd($leaves);
        return view(
            'parent-dashboard.leave-status', compact('student', 'leaves'));
    }

    public function feeStatus()
    {

        $parent = Auth::user();

        $student = Student::where('parent_id', $parent->id)->first();
        $fees = collect();
        if ($student) {

            $fees = Fee::with('room')->where('student_id', $student->user_id)->latest()->get();
        }

        return view(
            'parent-dashboard.fee-status',
            compact('student', 'fees'));
    }

    public function visitors()
    {

        $parent = Auth::user();

        $student = Student::where('parent_id',$parent->id)->first();

        $visitors = collect();

        if ($student) {
            $visitors = Visitor::with([
                'student',
                'warden',
            ])->where('student_id', $student->user_id)->latest()->get();
        }

        return view('parent-dashboard.visitor', compact('student', 'visitors'));
    }
}
