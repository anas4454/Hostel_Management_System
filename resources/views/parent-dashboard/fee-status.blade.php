<x-parent-component.main>
	<div class="container-fluid p-4">
		<div class="card-box mb-4">
			<h5 class="mb-3">Fee Status</h5>
			<table class="table table-bordered table-hover">
				<thead class="table-success">
					<tr>
						<th>#</th>
						<th>Month</th>
						<th>Status</th>
						<th>Amount</th>
						<th>Date Paid</th>
					</tr>
				</thead>
				<tbody>
					<!-- Example row -->
                    @if ($fees->isNotEmpty())
                        @foreach ($fees as $fee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fee->month }}</td>
                                <td>
                                    @if ($fee->status === 'Paid')
                                        <span class="badge bg-success">Paid</span>
                                    @elseif ($fee->status === 'Pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @else
                                        <span class="badge bg-danger">Overdue</span>
                                    @endif
                                </td>
                                <td>Rs. {{ $fee->amount }}</td>
                                <td>{{ $fee->paid_at ? $fee->paid_at->format('d M Y') : 'N/A' }}</td>
                            </tr>
                        @endforeach

                        @else
                            <tr>
                                <td colspan="5" class="text-center">No fee records found.</td>
                            </tr>

                    @endif
					{{-- <tr>
						<td>1</td>
						<td>May 2026</td>
						<td><span class="badge bg-success">Paid</span></td>
						<td>Rs. 10,000</td>
						<td>01 May 2026</td>
					</tr> --}}
				</tbody>
			</table>
		</div>
	</div>
</x-parent-component.main>
