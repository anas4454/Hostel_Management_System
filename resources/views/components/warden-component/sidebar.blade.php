    <aside class="sidebar p-3" id="sidebar">

        <img src="{{ asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

        <ul class="menu">
          <a href="{{ route('warden.dashboard') }}"><li class="active">Dashboard</li></a>
             <a href="{{ route('warden.students') }}"><li>Students</li></a>
            <a href="{{ route('warden.fee-payment') }}"><li>Fee Payment</li></a>
            <a href="{{ route('warden.room-approval') }}"><li>Room Approval</li></a>
            <a href="{{ route('warden.complaints') }}"><li>Complaints</li></a>
            <a href="{{ route('warden.leave-approval') }}"><li>Leave Approval</li></a>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-light w-100">Logout</button>
        </form>
    </aside>
