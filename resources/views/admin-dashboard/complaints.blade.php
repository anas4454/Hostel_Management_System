<x-admin-component.main>
	<div class="container py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3>Complaints</h3>
		</div>
		<div class="card-box">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Student</th>
						<th>Complaint</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
                    @if ($complaints->isNotEmpty())
                        @foreach ($complaints as $complaint)
                            <tr>
                                <td>{{ $complaint->student->name }}</td>
                                <td>{{ $complaint->description }}</td>
                                <td>{{ $complaint->created_at->format('Y-m-d') }}</td>
                                <td>
                                    @if ($complaint->status === 'Resolved')
                                        <span class="badge bg-success">Resolved</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>

                            </tr>
                        @endforeach

                    @endif

					<!-- Loop complaints here -->
				</tbody>
			</table>
		</div>
	</div>
</x-admin-component.main>
