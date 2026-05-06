    <aside class="sidebar p-3" id="sidebar">

        <img src="{{ asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

        <ul class="menu">
           <a href="{{ route('student.dashboard') }}"><li class="active">Dashboard</li></a>
            <a href="{{ route('student.room-booking') }}"><li>Room Booking</li></a>
            <a href="{{ route('student.fee-payment') }}"><li>Fee Payment</li></a>
            <a href="{{ route('student.complaints') }}"><li>Complaints</li></a>
            <a href="{{ route('student.leave') }}"><li>Leave Requests</li></a>
            <a href="{{ route('student.mess-management') }}"><li>Mess Management</li></a>
            <a href="{{ route('student.profile') }}"><li>Profile</li></a>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-light w-100">Logout</button>
        </form>
    </aside>
