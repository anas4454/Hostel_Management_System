<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Http\Requests\StoreParentsRequest;
use App\Http\Requests\UpdateParentsRequest;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('parent-dashboard.parent-dashboard');
    }


    public function leaveStatus()
    {
        return view('parent-dashboard.leave-status');
    }

    public function feeStatus()
    {
        return view('parent-dashboard.fee-status');
    }

    public function visitors()
    {
        return view('parent-dashboard.visitor');
    }

}

