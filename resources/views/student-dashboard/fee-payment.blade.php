<x-student-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">Hostel Fee Payment</h5>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-box p-4">
                        <h6>Current Status: <span class="badge bg-success">Paid</span></h6>
                        <p>Next Due: <strong>June 2026</strong></p>
                        <a href="{{ route('student.new-fee') }}"><button class="btn btn-outline-success mt-2">Pay
                                Now</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-box p-4">
                        <h6>Payment History</h6>
                        <ul class="list">
                            <li>May 2026 - Paid</li>
                            <li>April 2026 - Paid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-student-component.main>
