<x-warden-component.main>
    <div class="container-fluid p-4">
        <!-- DASHBOARD CARDS -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto">120</div>
                    <h6 class="mt-3">Total Students</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto">35</div>
                    <h6 class="mt-3">Rooms Occupied</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto">5</div>
                    <h6 class="mt-3">Pending Complaints</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto">3</div>
                    <h6 class="mt-3">Room Approvals</h6>
                </div>
            </div>
        </div>

        <!-- RECENT ACTIVITY -->
        <div class="card-box mb-4">
            <h5>Recent Activity</h5>
            <ul class="list">
                <li>Approved room booking for Ali Raza (Room 101)</li>
                <li>Resolved complaint: "Leaking tap in bathroom"</li>
                <li>Added new student: Ahmed Khan</li>
            </ul>
        </div>

        <!-- QUICK LINKS -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-box text-center">
                    <h6>Approve Room Bookings</h6>
                    <button class="btn btn-outline-success mt-2">Go</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box text-center">
                    <h6>Manage Complaints</h6>
                    <button class="btn btn-outline-success mt-2">Go</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box text-center">
                    <h6>Student Management</h6>
                    <button class="btn btn-outline-success mt-2">Go</button>
                </div>
            </div>
        </div>
    </div>
</x-warden-component.main>
