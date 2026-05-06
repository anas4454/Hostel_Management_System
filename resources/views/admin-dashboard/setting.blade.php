<x-admin-component.main>
	<div class="container py-4">
		<h3 class="mb-4">Settings</h3>
		<div class="row">
			<div class="col-md-6">
				<div class="card-box mb-4">
					<h5>Admin Profile</h5>
					<form>
						<div class="mb-3">
							<label class="form-label">Name</label>
							<input type="text" class="form-control" value="Admin Name">
						</div>
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" value="admin@example.com">
						</div>
						<button class="btn btn-success">Update Profile</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card-box mb-4">
					<h5>Change Password</h5>
					<form>
						<div class="mb-3">
							<label class="form-label">Current Password</label>
							<input type="password" class="form-control">
						</div>
						<div class="mb-3">
							<label class="form-label">New Password</label>
							<input type="password" class="form-control">
						</div>
						<div class="mb-3">
							<label class="form-label">Confirm New Password</label>
							<input type="password" class="form-control">
						</div>
						<button class="btn btn-success">Change Password</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-admin-component.main>
