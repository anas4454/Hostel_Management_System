<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Fee;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $studentCount = User::where('role', 'student')->count();
        $roomCount = Room::count();
        $complaintCount = Complaint::count();
        $totalCollection = Fee::where('status', 'Paid')->sum('amount');

        return view('admin-dashboard.dashboard', compact('studentCount', 'roomCount', 'complaintCount', 'totalCollection'));
    }

    public function adminComplaints()
    {
        $complaints = Complaint::with('student')->get();
        return view('admin-dashboard.complaints', compact('complaints'));
    }

    public function adminFeePayment()
    {
        $fees = Fee::with('student')->get();
        return view('admin-dashboard.fee-payment', compact('fees'));
    }

    public function adminRoomView()
    {
        $rooms = Room::with([
            'fees',
            'approvals',
        ])->get();

        return view(
            'admin-dashboard.room',
            compact('rooms')
        );
    }

    public function wardens()
    {
        $wardens = User::where('role', 'warden')->get();

        return view('admin-dashboard.warden', compact('wardens'));
    }

    public function addWardens()
    {
        return view('admin-dashboard.addWarden');
    }

    public function addWarden(Request $request)
    {
        // Logic for adding warden
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'warden',
        ]);

        return view('admin-dashboard.warden')->with('success', 'Warden added successfully!');
    }

  
}
