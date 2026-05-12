<x-admin-component.main>
	<div class="container py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3>Fee Payments</h3>
			<button class="btn btn-success">Add Payment</button>
		</div>
		<div class="card-box">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Student</th>
						<th>Amount</th>
						<th>Date</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
                    @if ($fees->isNotEmpty())
                        @foreach ($fees as $fee)
                            <tr>
                                <td>{{ $fee->student->name }}</td>
                                <td>Rs:{{ $fee->amount }}</td>
                                <td>{{ $fee->created_at->format('Y-m-d') }}</td>
                                <td>
                                    @if ($fee->status === 'Paid')
                                        <span class="badge bg-success">Paid</span>
                                    @else
                                        <span class="badge bg-danger">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary">View</button>
                                </td>
                            </tr>
                        @endforeach

                    @endif
					<tr>
						<td>Jane Smith</td>
						<td>₹10,000</td>
						<td>2026-05-01</td>
						<td><span class="badge bg-success">Paid</span></td>
						<td>
							<button class="btn btn-sm btn-primary">View</button>
						</td>
					</tr>
					<!-- Loop payments here -->
				</tbody>
			</table>
		</div>
	</div>
</x-admin-component.main>
