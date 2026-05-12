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

                    @if ($complaints->isNotEmpty())

                        @foreach ($complaints as $complain)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $complain->student->name ?? 'NA' }}</td>
                                <td>{{ $complain->subject }}</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>{{ $complain->created_at->format('d M Y') }}</td>
                                <td>
                                    <form action="{{ route('warden.approve-complaint', $complain->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-success btn-sm">
                                            Approve
                                        </button>
                                    </form>
                                    <form action="{{ route('warden.reject-complaint', $complain->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-danger btn-sm">
                                            Reject
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    @endif


                </tbody>
            </table>
        </div>
    </div>
</x-warden-component.main>
