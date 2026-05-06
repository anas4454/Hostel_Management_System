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
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
					<tr>
						<td>Jane Smith</td>
						<td>Leaking tap in bathroom</td>
						<td>2026-05-01</td>
						<td><span class="badge bg-warning">Pending</span></td>
						<td>
							<button class="btn btn-sm btn-primary">View</button>
							<button class="btn btn-sm btn-success">Resolve</button>
						</td>
					</tr>
					<!-- Loop complaints here -->
				</tbody>
			</table>
		</div>
	</div>
</x-admin-component.main>
