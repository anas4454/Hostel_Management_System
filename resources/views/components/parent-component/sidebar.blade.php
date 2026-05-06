    <aside class="sidebar p-3" id="sidebar">

        <img src="{{ asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

        <ul class="menu">
           <a href="{{ route('parent.dashboard') }}"><li class="active">Dashboard</li></a>
            <a href="{{ route('parent.fee-status') }}"><li>Fee Status</li></a>
            <a href="{{ route('parent.leave-status') }}"><li>Leave Requests</li></a>
            <a href="{{ route('parent.visitors') }}"><li>Visitors</li></a>
        </ul>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-light w-100">Logout</button>
        </form>
    </aside>
