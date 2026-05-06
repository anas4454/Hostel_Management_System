<x-admin-component.main>
	<div class="container py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3>Wardens</h3>
		 <a href="{{ route('admin.add-wardens') }}">	<button class="btn btn-success">Add Warden</button></a>
		</div>
		<div class="card-box">
			<h6 class="mb-3">Warden List</h6>
			<table class="table table-bordered table-hover">
				<thead class="table-success">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
					<tr>
						<td>1</td>
						<td>Warden Ali</td>
						<td>ali.warden@email.com</td>
						<td>00234567</td>
						<td><button class="btn btn-outline-danger btn-sm">Delete</button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</x-admin-component.main>
