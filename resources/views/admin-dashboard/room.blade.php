<x-admin-component.main>
	<div class="container py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3>Room Management</h3>
			<button class="btn btn-success">Add Room</button>
		</div>
		<div class="card-box">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Room No</th>
						<th>Type</th>
						<th>Capacity</th>
						<th>Occupied</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
					<tr>
						<td>101</td>
						<td>Single</td>
						<td>1</td>
						<td>Yes</td>
						<td>
							<button class="btn btn-sm btn-primary">Edit</button>
							<button class="btn btn-sm btn-danger">Delete</button>
						</td>
					</tr>
					<!-- Loop rooms here -->
				</tbody>
			</table>
		</div>
	</div>
</x-admin-component.main>
