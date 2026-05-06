<x-student-component.main>


<div class="container-fluid p-4">


    <!-- ADD COMPLAINT -->
    <div class="card-box mb-4">
        <h5 class="mb-3">Submit New Complaint</h5>

        <form method="POST" action="{{ route('student.store-complaint') }}">
            @csrf

            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="subject" class="form-control" placeholder="Complaint Subject" required>
                </div>


                <div class="col-md-12">
                    <button type="submit" class="btn btn-success px-4">
                        Submit Complaint
                    </button>
                </div>
            </div>
        </form>
    </div>


</div>



</x-student-component.main>
