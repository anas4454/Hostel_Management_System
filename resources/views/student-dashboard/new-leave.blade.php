<x-student-component.main>

<div class="container-fluid p-4">

    <!-- APPLY LEAVE -->
    <div class="card-box mb-4">
        <h5 class="mb-3">Apply for Leave</h5>

        <form method="POST"  action="{{ route('student.store-leave') }}">
            @csrf

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-label">From Date</label>
                    <input type="date" name="from_date" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">To Date</label>
                    <input type="date" name="to_date" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Reason</label>
                    <textarea name="reason" rows="3" class="form-control"
                        placeholder="Enter reason..." required></textarea>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-success px-4">
                        Submit Leave Request
                    </button>
                </div>

            </div>
        </form>
    </div>


</div>

</x-student-component.main>
