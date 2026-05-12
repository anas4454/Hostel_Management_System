    <aside class="sidebar p-3" id="sidebar">

        <img src="{{ asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

        <ul class="menu">
            <a href="{{ route('warden.dashboard') }}"><li class="{{ request()->routeIs('warden.dashboard') ? 'active' : '' }}">Dashboard</li>
            </a>
            <a href="{{ route('warden.students') }}">
                <li class="{{ request()->routeIs('warden.students') ? 'active' : '' }}">Students</li>
            </a>
            <a href="{{ route('warden.fee-payment') }}">
                <li class="{{ request()->routeIs('warden.fee-payment') ? 'active' : '' }}">Fee Payment</li>
            </a>
            <a href="{{ route('warden.room-approval') }}">
                <li class="{{ request()->routeIs('warden.room-approval') ? 'active' : '' }}">Room Approval</li>
            </a>
            <a href="{{ route('warden.complaints') }}">
                <li class="{{ request()->routeIs('warden.complaints') ? 'active' : '' }}">Complaints</li>
            </a>
            <a href="{{ route('warden.leave-approval') }}">
                <li class="{{ request()->routeIs('warden.leave-approval') ? 'active' : '' }}">Leave Approval</li>
            </a>
            <a href="{{ route('warden.visitors') }}">
                <li class="{{ request()->routeIs('warden.visitors') ? 'active' : '' }}">Visitors</li>
            </a>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-light w-100">Logout</button>
        </form>
    </aside>
