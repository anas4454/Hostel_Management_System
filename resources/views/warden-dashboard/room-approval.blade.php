<x-warden-component.main>
	<div class="container-fluid p-4">
		<div class="card-box mb-4">
			<h5 class="mb-3">Room Booking Approvals</h5>
			<table class="table table-bordered table-hover">
				<thead class="table-success">
					<tr>
						<th>#</th>
						<th>Student</th>
						<th>Room</th>
						<th>Type</th>
						<th>Seats</th>
						<th>Price</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
					<tr>
						<td>1</td>
						<td>Ahmed Khan</td>
						<td>102</td>
						<td>Single</td>
						<td>1</td>
						<td>Rs. 15,000</td>
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
