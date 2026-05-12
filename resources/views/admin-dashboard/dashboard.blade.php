<x-admin-component.main>
<div class="container-fluid p-4">

                <div class="row g-4">

                    <div class="col-md-3">
                        <div class="card-box">
                            <h6>Total Students</h6>
                            <h3>{{ $studentCount }}</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-box">
                            <h6>Total Rooms</h6>
                            <h3>{{ $roomCount }}</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-box">
                            <h6>Collection</h6>
                            <h3>RS:{{ $totalCollection }}</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-box">
                            <h6>Complaints</h6>
                            <h3>{{$complaintCount}}</h3>
                        </div>
                    </div>

                </div>

                <!-- SECOND ROW -->
                <div class="row g-4 mt-3">

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h6>Occupancy</h6>
                            <div class="circle">93%</div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h6>Recent Activities</h6>
                            <ul class="list">
                                <li>New student added</li>
                                <li>Room allocated</li>
                                <li>Payment received</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h6>Collection Overview</h6>
                            <div class="circle">78%</div>
                        </div>
                    </div>

                </div>

            </div>



</x-admin-component.main>
