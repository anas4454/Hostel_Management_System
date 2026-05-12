<x-warden-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">Leave Approvals</h5>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->

                    @if ($leaves->isNotEmpty())

                        @foreach ($leaves as $leave)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $leave->student->name ?? 'NA' }}</td>
                                <td>{{ $leave->from_date->format('d M Y') }}</td>
                                <td>{{ $leave->to_date->format('d M Y') }}</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>
                                    <form action="{{ route('warden.approve-leave', $leave->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-success btn-sm">
                                            Approve
                                        </button>
                                    </form>
                                    <form action="{{ route('warden.reject-leave', $leave->id) }}"
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
                    @else
                        no leaves found
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</x-warden-component.main>
