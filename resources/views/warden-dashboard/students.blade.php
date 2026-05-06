<x-warden-component.main>
	<div class="container py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3>Students</h3>
			<button class="btn btn-success">Add Student</button>
		</div>
		<div class="card-box">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Room</th>
						<th>Fee</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->

                        @if ($students->isNotEmpty())
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->room->id  }}</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>

                                	</tr>
                            @endforeach
                         @else
                            <td colspan="5" class="text-center">No students found.</td>

                        @endif
						{{-- <td>Jane Smith</td>
						<td>jane@example.com</td>
						<td>101</td>
						<td><span class="badge bg-success">Active</span></td>
						<td>
							<button class="btn btn-sm btn-primary">Edit</button>
							<button class="btn btn-sm btn-danger">Delete</button>
						</td> --}}

					<!-- Loop students here -->
				</tbody>
			</table>
		</div>
	</div>
</x-warden-component.main>
