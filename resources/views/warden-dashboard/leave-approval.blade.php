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
					<tr>
						<td>1</td>
						<td>Ali Raza</td>
						<td>28 Apr 2026</td>
						<td>30 Apr 2026</td>
						<td><span class="badge bg-warning text-dark">Pending</span></td>
						<td>
							<button class="btn btn-outline-success btn-sm">Approve</button>
							<button class="btn btn-outline-danger btn-sm">Reject</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</x-warden-component.main>
