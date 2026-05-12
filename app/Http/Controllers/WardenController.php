<?php

namespace App\Http\Controllers;

use App\Mail\RoomApprovedMail;
use App\Models\Approval;
use App\Models\Complaint;
use App\Models\Fee;
use App\Models\Leave;
use App\Models\Room;
use App\Models\Student;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class WardenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentCount = Student::count();
        $roomCount = Room::count();
        $complaintCount = Complaint::all();
        $totalCollection = Fee::where('status', 'Paid')->sum('amount');

        return view('warden-dashboard.warden-dashboard', compact('studentCount', 'roomCount', 'complaintCount', 'totalCollection'));
    }

    // ____________________________________________________________________________________________
    public function students()
    {
        $students = User::where(
            'role',
            'student'
        )
            ->whereHas('approvals', function ($query) {

                $query->where(
                    'status',
                    'Approved'
                );
            })
            ->with([
                'fees',
                'approvals.room',
                'studentProfile',
            ])
            ->latest()
            ->get();

        return view(
            'warden-dashboard.students',
            compact('students')
        );
    }
    // ________________________________________________________________________________________________

    public function complaints()
    {
        $complaints = Complaint::with('student')->where('status', 'pending')->latest()->get();

        return view('warden-dashboard.complaints', compact('complaints'));
    }

    public function approveComplaint(Complaint $complaint)
    {

        $complaint->update([
            'status' => 'Resolved',
            'warden_id' => Auth::id(),
        ]);

        return back()->with(
            'success',
            'Complaint approved successfully.'
        );
    }

    public function rejectComplaint(Complaint $complaint)
    {

        $complaint->update([
            'status' => 'Rejected',
            'warden_id' => Auth::id(),
        ]);

        return back()->with(
            'success',
            'Complaint rejected successfully.'
        );
    }

    // ________________________________________________________________________________________________

    public function feePayment()
    {
        $fees = Fee::with([
            'student',
            'room',
        ])
            ->whereHas('room')
            ->latest()
            ->get();

        return view(
            'warden-dashboard.fee-payment',
            compact('fees')
        );
    }
    // ________________________________________________________________________________________________

    public function leave()
    {
        $leaves = Leave::with('student')->where('status', 'pending')->latest()->get();

        return view('warden-dashboard.leave-approval', compact('leaves'));
    }

    public function approveLeave(Leave $leave)
    {
        /**
         * Approve Leave
         */
        $leave->update(['status' => 'Approved', 'warden_id' => Auth::id()]);

        return back()->with(
            'success',
            'Leave approved successfully.'
        );
    }

    public function rejectLeave(Leave $leave)
    {
        /**
         * Reject Leave
         */
        $leave->update(['status' => 'Rejected', 'warden_id' => Auth::id()]);

        return back()->with(
            'success',
            'Leave rejected successfully.'
        );
    }
    // ________________________________________________________________________________________________

    public function roomApproval()
    {

        $approvals = Approval::with([
            'student',
            'room',
        ])
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view('warden-dashboard.room-approval', compact('approvals'));
    }

    public function approveRoom(Approval $approval)
    {
        $approval->update([

            'status' => 'Approved',
            'warden_id' => Auth::id(),
        ]);

        $room = Room::find(
            $approval->room_id
        );

        $currentMonth =
        now()->format('F');

        $currentYear =
        now()->year;

        $feeExists = Fee::where(
            'student_id',
            $approval->student_id
        )
            ->where('month', $currentMonth)
            ->where('year', $currentYear)
            ->exists();

        if (! $feeExists && $room) {

            Fee::create([

                'student_id' => $approval->student_id,
                'room_id' => $room->id,
                'amount' => $room->price,
                'month' => $currentMonth,
                'year' => $currentYear,
                'status' => 'Unpaid',
            ]);
        }

        Mail::to(
            $approval->student->email)->send(new RoomApprovedMail($approval)
            );

        $this->sendSms(

            $approval->student->phone,

            'Your hostel room has been approved successfully.'

        );

        return back()->with(
            'success',
            'Room approved successfully.'
        );
    }

    public function rejectRoom(Approval $approval)
    {
        $approval->update([

            'status' => 'Rejected',
            'warden_id' => Auth::id(),
        ]);

        return back()->with(
            'success',
            'Room rejected successfully.'
        );
    }

    // ______________________________________________________________________________________________

    public function visitors()
    {
        /**
         * Only Students
         */
        $students = User::where('role', 'student')->get();

        $visitors = Visitor::with('student')->latest()->get();

        return view(
            'warden-dashboard.visitors',
            compact('visitors', 'students')
        );
    }

    public function storeVisitor()
    {
        request()->validate([

            'student_id' => ['required', 'exists:users,id'],
            'visitor_name' => ['required', 'string', 'max:255'],
            'relation' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'visit_date' => ['required', 'date'],
            'entry_time' => ['nullable'],
        ]);

        Visitor::create([

            'student_id' => request('student_id'),
            'warden_id' => Auth::id(),
            'visitor_name' => request('visitor_name'),
            'relation' => request('relation'),
            'phone' => request('phone'),
            'visit_date' => request('visit_date'),
            'entry_time' => request('entry_time'),
            'status' => 'Approved',
        ]);

        return back()->with(

            'success',
            'Visitor added successfully.'
        );
    }

    public function sendSms($phone, $message)
    {
        Log::info('SMS Sent To: '.$phone);

        Log::info('Message: '.$message);
    }
}
