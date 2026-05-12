 <!-- SIDEBAR -->
        <aside class="sidebar p-3" id="sidebar">

            <img src="{{  asset('images/logo.png') }}" alt="" width="100" class="m-2 mb-4">

            <ul class="menu">
                <a href="{{ route('admin.dashboard') }}"><li class=" @if(request()->routeIs('admin.dashboard')) active @endif">Dashboard</li></a>
               <a href="{{ route('admin.wardens') }}"><li class=" @if(request()->routeIs('admin.wardens')) active @endif">Wardens</li></a>
              <a href="{{ route('admin.room') }}"><li class=" @if(request()->routeIs('admin.room')) active @endif">Room Management</li></a>
               <a href="{{ route('admin.fee-payment') }}"><li class=" @if(request()->routeIs('admin.fee-payment')) active @endif">Payments</li></a>
                <a href="{{ route('admin.complaints') }}"><li class=" @if(request()->routeIs('admin.complaints')) active @endif">Complaints</li></a>

            </ul>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="btn btn-light w-100">Logout</button>
            </form>
        </aside>
