    <div class="topbar d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div class="hamburger" onclick="toggleSidebar()">☰</div>
                    <div class="panel-name me-3 text-uppercase" style="font-weight: bold; font-size: 1.5rem;">Warden Dashboard</div>
                </div>

                <h5 class="mb-0">Welcome back, {{ Auth::user()->name }}</h5>

            </div>
