<x-parent-component.main>
	<div class="container-fluid p-4">
		<div class="card-box mb-4">
			<h5 class="mb-3">Leave Status</h5>
			<table class="table table-bordered table-hover">
				<thead class="table-success">
					<tr>
						<th>#</th>
						<th>From</th>
						<th>To</th>
						<th>Status</th>
						<th>Reason</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
                    @if ($leaves->isNotEmpty())
                        @foreach ($leaves as $leave)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $leave->from_date }}</td>
                                <td>{{ $leave->to_date }}</td>
                                <td>
                                    @if ($leave->status === 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif ($leave->status === 'Rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>{{ $leave->reason }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No leave applications found.</td>
                        </tr>
                    @endif
					{{-- <tr>
						<td>1</td>
						<td>28 Apr 2026</td>
						<td>30 Apr 2026</td>
						<td><span class="badge bg-success">Approved</span></td>
						<td>Family Visit</td>
					</tr> --}}
				</tbody>
			</table>
		</div>
	</div>
</x-parent-component.main>
