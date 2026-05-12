<x-student-component.main>

    <div class="container-fluid p-4">

        <!-- DASHBOARD CARDS -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto">
                        {{ $approval && $approval->status == 'Approved' ? $approval->room->room_number : 'Null' }}
                    </div>
                    <h6 class="mt-3">Room Number</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto">
                        {{ $fee ? 'Paid' : 'Not Paid' }}
                    </div>
                    <h6 class="mt-3">Fee Status</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto"> {{ $complaintsCount }}</div>
                    <h6 class="mt-3">Complaints</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-box text-center">
                    <div class="circle mx-auto"> {{ $pendingLeaves }}
                    </div>
                    <h6 class="mt-3">Pending Leaves</h6>
                </div>
            </div>
        </div>

        <!-- RECENT ACTIVITY -->
        <div class="card-box mb-4">
            <h5>Recent Activity</h5>
            <ul class="list">
                <li>Hostel fee for May 2026 is {{ $fee ? 'paid' : 'not paid' }}</li>
                {{-- <li>Submitted complaint: "{{ $complaintsCount > 0 ? $complaints->first()->subject : 'No complaints submitted' }}"</li> --}}
                {{-- <li>Leave request approved for {{ $pendingLeaves > 0 ? $leaves->first()->from_date : 'No pending leaves' }}</li> --}}
            </ul>
        </div>

        <!-- QUICK LINKS -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-box text-center">
                    <h6>View Room Details</h6>
                    <a href="{{ route('student.room-booking') }}" class="btn btn-outline-success mt-2">Go</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box text-center">
                    <h6>Pay Hostel Fee</h6>
                    <a href="{{ route('student.fee-payment') }}" class="btn btn-outline-success mt-2">Go</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box text-center">
                    <h6>Submit Complaint</h6>
                    <a href="{{ route('student.complaints') }}" class="btn btn-outline-success mt-2">Go</a>
                </div>
            </div>
        </div>
    </div>



</x-student-component.main>
