    <aside class="sidebar p-3" id="sidebar">

        <img src="{{ asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

        <ul class="menu">
           <a href="{{ route('student.dashboard') }}"><li class="@if(request()->routeIs('student.dashboard')) active @endif">Dashboard</li></a>
            <a href="{{ route('student.room-booking') }}"><li class="@if(request()->routeIs('student.room-booking')) active @endif">Room Booking</li></a>
            <a href="{{ route('student.fee-payment') }}"><li class="@if(request()->routeIs('student.fee-payment')) active @endif">Fee Payment</li></a>
            <a href="{{ route('student.complaints') }}"><li class="@if(request()->routeIs('student.complaints')) active @endif">Complaints</li></a>
            <a href="{{ route('student.leave') }}"><li class="@if(request()->routeIs('student.leave')) active @endif">Leave Requests</li></a>
            <a href="{{ route('student.mess-management') }}"><li class="@if(request()->routeIs('student.mess-management')) active @endif">Mess Management</li></a>
            <a href="{{ route('student.profile') }}"><li class="@if(request()->routeIs('student.profile')) active @endif">Profile</li></a>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-light w-100">Logout</button>
        </form>
    </aside>
