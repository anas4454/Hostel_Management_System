<x-admin-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">Add Warden</h5>
            <form class="row g-3 mb-4" method="POST" action="{{ route('admin.add-warden') }}">
                @csrf
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Warden Name" required>
                </div>
                <div class="col-md-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                {{-- <div class="col-md-3">
					<input type="text" class="form-control" placeholder="Phone" required>
				</div> --}}
                <div class="col-md-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="col-md-3">
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Add Warden</button>
                </div>
            </form>


        </div>
    </div>
</x-admin-component.main>
