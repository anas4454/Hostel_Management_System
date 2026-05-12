
<x-student-component.main>
	<div class="container-fluid p-4">
		<div class="card-box mb-4">

             @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
			<h5 class="mb-3">Leave Requests</h5>
			<table class="table table-bordered table-hover">
				<thead class="table-success">
					<tr>
						<th>#</th>
						<th>From</th>
						<th>To</th>
						<th>Reason</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
                    @if ($leaves->isNotEmpty())
                    @foreach ($leaves as $leave)
                    	<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $leave->from_date }}</td>
						<td>{{ $leave->to_date }}</td>
						<td>{{ $leave->reason }}</td>
						<td><span class="badge bg-warning text-dark">{{ $leave->status }}</span></td>
						<td><button class="btn btn-outline-success btn-sm">View</button></td>
					</tr>
                    @endforeach
                    @endif
				</tbody>
			</table>
		<a href="{{ route('student.new-leave') }}"><button class="btn btn-success mt-3">Apply for Leave</button></a>
		</div>
	</div>
</x-student-component.main>
