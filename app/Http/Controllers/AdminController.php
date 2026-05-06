<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin-dashboard.dashboard');
    }

    public function adminComplaints()
    {
        return view('admin-dashboard.complaints');
    }

    public function adminFeePayment()
    {
        return view('admin-dashboard.fee-payment');
    }

    public function adminRoomView()
    {
        return view('admin-dashboard.room');
    }

    public function wardens()
    {
        return view('admin-dashboard.warden');
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

   

    public function adminSetting()
    {
        return view('admin-dashboard.setting');
    }
}
