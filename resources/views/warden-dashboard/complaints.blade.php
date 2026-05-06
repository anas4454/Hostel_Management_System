<x-warden-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">Manage Complaints</h5>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr>

                        @if ($complaints->isNotEmpty())

                            @foreach ($complaints as $complain)
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $complain->student->name }}</td>
                                <td>{{ $complain->subject }}</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>{{ $complain->created_at->format('d M Y') }}</td>
                                <td>
                                    <button class="btn btn-outline-success btn-sm">Approve</button>
                                    <button class="btn btn-outline-danger btn-sm">Reject</button>
                                </td>
                            @endforeach

                        @endif

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-warden-component.main>
