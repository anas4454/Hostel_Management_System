<x-student-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">My Complaints</h5>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    @if ($complaints->isNotEmpty())
                        @foreach ($complaints as $complain)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $complain->subject }}</td>
                                <td><span class="badge bg-warning text-dark">{{ $complain->status }}</span></td>
                                <td>{{ $complain->created_at->format('d M Y') }}</td>
                                <td><button class="btn btn-outline-success btn-sm">View</button></td>
                            </tr>
                        @endforeach

                    @endif

                </tbody>
            </table>
            <a href="{{ route('student.new-complaint') }}"><button class="btn btn-success mt-3">Submit New
                    Complaint</button></a>
        </div>
    </div>
</x-student-component.main>
