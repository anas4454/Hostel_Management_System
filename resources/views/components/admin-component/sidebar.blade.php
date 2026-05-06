 <!-- SIDEBAR -->
        <aside class="sidebar p-3" id="sidebar">

            <img src="{{  asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

            <ul class="menu">
                <li class="active">Dashboard</li>
               <a href="{{ route('admin.wardens') }}"><li>Wardens</li></a>
              <a href="{{ route('admin.room') }}"><li>Room Management</li></a>
               <a href="{{ route('admin.fee-payment') }}"><li>Payments</li></a>
                <a href="{{ route('admin.complaints') }}"><li>Complaints</li></a>
                <a href="{{ route('admin.setting') }}"><li>Settings</li></a>

            </ul>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="btn btn-light w-100">Logout</button>
            </form>
        </aside>
