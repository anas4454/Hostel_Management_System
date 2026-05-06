<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class WardenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('warden-dashboard.warden-dashboard');
    }
     public function students()
    {
        $students = Student::with('room')->latest()->get();
        dd($students);
        return view('warden-dashboard.students', compact('students'));
    }

    public function complaints(Student $student)
    {
        $complaints = Complaint::with('student')->latest()->get();
        return view('warden-dashboard.complaints' , compact('complaints'));
    }

    public function feePayment()
    {
        return view('warden-dashboard.fee-payment');
    }

    public function leave()
    {
        return view('warden-dashboard.leave-approval');
    }

    public function roomApproval()
    {
        return view('warden-dashboard.room-approval');
    }
}
