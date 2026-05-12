<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Complaint;
use App\Models\Fee;
use App\Models\Leave;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Student Dashboard
     */
    public function index()
    {
        $studentId = auth()->id();

        
        $approval = Approval::where('student_id', Auth::id())
            ->where('status', 'Approved')
            ->first();
        $fee = Fee::where('student_id', $studentId)
            ->where('month', Carbon::now()->month)
            ->where('year', Carbon::now()->year)
            ->first();

        // Complaints Count
        $complaintsCount = Complaint::where('student_id', $studentId)
            ->count();

        // Pending Leaves Count
        $pendingLeaves = Leave::where('student_id', $studentId)
            ->where('status', 'Pending')
            ->count();

        return view('student-dashboard.main', compact('approval', 'fee', 'complaintsCount', 'pendingLeaves'));
    }

    /**
     * ==============================
     * Complaints
     * ==============================
     */
    public function complaints()
    {
        $complaints = Auth::user()
            ->complaints()
            ->latest()
            ->get();

        // dd($complaints);
        return view(
            'student-dashboard.complaints',
            compact('complaints')
        );
    }

    public function newComplaint()
    {
        return view(
            'student-dashboard.new-complaint'
        );
    }

    public function storeComplaint(Request $request)
    {
        $request->validate([

            'subject' => 'required|string|max:255',
        ]);

        Complaint::create([

            'student_id' => Auth::id(),
            'subject' => $request->subject,
            'status' => 'Pending',

        ]);

        return redirect()
            ->route('student.complaints')
            ->with(
                'success',
                'Complaint submitted successfully.'
            );
    }

    /**
     * ==============================
     * Leave Management
     * ==============================
     */
    public function leave()
    {
        $leaves = Auth::user()
            ->leaves()
            ->latest()
            ->get();

        return view(
            'student-dashboard.leave',
            compact('leaves')
        );
    }

    public function newLeave()
    {
        return view(
            'student-dashboard.new-leave'
        );
    }

    public function storeLeave(Request $request)
    {
        $request->validate([

            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'reason' => 'required|string',
        ]);

        Leave::create([
            'student_id' => Auth::id(),
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'reason' => $request->reason,
            'status' => 'Pending',
        ]);

        return redirect()
            ->route('student.leave')
            ->with(
                'success',
                'Leave request submitted successfully.'
            );
    }

    /**
     * ==============================
     * Room Booking
     * ==============================
     */
    public function roomBooking()
    {
        $rooms = Room::with('approvals')->latest()->get();

        return view(
            'student-dashboard.roombooking',
            compact('rooms')
        );
    }

    public function bookRoom(Room $room)
    {
        $studentId = Auth::id();

        $alreadyBooked = Approval::where('student_id', $studentId)->where('status', 'Approved')->exists();

        if ($alreadyBooked) {

            return back()->with(
                'error',
                'You already have an approved room.'
            );
        }

        $approvedCount = Approval::where('room_id', $room->id)->where('status', 'Approved')->count();

        if ($approvedCount >= $room->seats) {

            return back()->with(
                'error',
                'Room is already full.'
            );
        }

        $pendingRequest = Approval::where('student_id', $studentId)->where('room_id', $room->id)->where('status', 'Pending')->exists();

        if ($pendingRequest) {

            return back()->with(
                'error',
                'You already requested this room.'
            );
        }

        Approval::create([
            'student_id' => $studentId,
            'room_id' => $room->id,
            'status' => 'Pending',
        ]);

        return back()->with(
            'success',
            'Room request sent to warden.'
        );
    }

    /**
     * ==============================
     * Fee Payment
     * ==============================
     */
    public function feePayment()
    {
        $student = Auth::user();

        /**
         * Approved Room
         */
        $booking = Approval::with('room')
            ->where('student_id', $student->id)
            ->where('status', 'Approved')
            ->latest()
            ->first();

        /**
         * Default values
         */
        $fee = null;

        /**
         * Only generate fee if room approved
         */
        if ($booking) {

            $currentMonth = Carbon::now()->format('F');

            $currentYear = Carbon::now()->year;

            /**
             * Existing fee
             */
            $fee = Fee::where(
                'student_id',
                $student->id
            )
                ->where('month', $currentMonth)
                ->where('year', $currentYear)
                ->first();

            /**
             * Create fee if not exists
             */
            if (! $fee) {

                $room = Room::find($booking->room_id);

                $fee = Fee::create([

                    'student_id' => $student->id,
                    'room_id' => $booking->room_id,
                    'amount' => $room?->price ?? 0,
                    'month' => $currentMonth,
                    'year' => $currentYear,
                    'status' => 'Unpaid',
                ]);
            }
        }

        return view(
            'student-dashboard.fee-payment',
            compact('fee', 'booking')
        );
    }

    /**
     * ==============================
     * Mess Management
     * ==============================
     */
    public function messManagement()
    {
        return view(
            'student-dashboard.Mess-Management'
        );
    }

    /** Profile  */
    public function profile()
    {
        $student = Auth::user()->load('studentProfile');

        // dd($student);
        return view(
            'student-dashboard.student-profile',
            compact('student')
        );
    }

    public function editProfile()
    {
        $student = Auth::user()->load('studentProfile');

        return view(
            'student-dashboard.edit-profile',
            compact('student')
        );
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([

            /**
             * USERS TABLE
             */
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'phone' => 'required|string|max:20',
            'roll_number' => 'required|string|max:50|unique:students,roll_number,'.optional($user->studentProfile)->id,
        ]);

        $user->update([

            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->studentProfile()->updateOrCreate(

            [
                'user_id' => $user->id,
            ],

            [
                'phone' => $request->phone,
                'roll_number' => $request->roll_number,
            ]
        );

        return redirect()
            ->route('student.profile')
            ->with(
                'success',
                'Profile updated successfully.'
            );
    }
}
