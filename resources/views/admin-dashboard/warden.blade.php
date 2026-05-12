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
						{{-- <th>Password</th> --}}
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
                    @if ($wardens->isNotEmpty())
                        @foreach ($wardens as $warden)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $warden->name }}</td>
                                <td>{{ $warden->email }}</td>
                                {{-- <td>{{ $warden->password }}</td> --}}
                                <td><button class="btn btn-outline-danger btn-sm">Delete</button></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No wardens found.</td>
                        </tr>

                    @endif

				</tbody>
			</table>
		</div>
	</div>
</x-admin-component.main>
