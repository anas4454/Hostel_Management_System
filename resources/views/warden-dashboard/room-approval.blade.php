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

                    @if ($approvals->isNotEmpty())

                        @foreach ($approvals as $approval)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $approval->student->name ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $approval->room->room_number ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $approval->room->type ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $approval->room->seats ?? 'N/A' }}
                                </td>
                                <td>
                                    Rs. {{ number_format($approval->room->price, 2) ?? 'N/A' }}
                                </td>
                                <td>
                                    <span
                                        class="badge
                                        {{ $approval->status == 'Approved' ? 'bg-success' : ($approval->status == 'Rejected' ? 'bg-danger' : 'bg-warning text-dark') }}">
                                        {{ $approval->status }}
                                    </span>
                                </td>
                                <td>

                                    @if ($approval->status == 'Pending')
                                        <form method="POST"
                                            action="{{ route('warden.approve-room', $approval) }}"
                                            class="d-inline">
                                            @csrf
                                            @method('Post')
                                            <input type="hidden" name="status" value="Approved">
                                            <button type="submit"
                                                class="btn btn-outline-success btn-sm">Approve</button>
                                        </form>
                                        <form method="POST"
                                            action="{{ route('warden.reject-room', $approval) }}"
                                            class="d-inline">
                                            @csrf
                                            @method('Post')
                                            <input type="hidden" name="status" value="Rejected">
                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm">Reject</button>
                                        </form>
                                    @else
                                        No actions available
                                    @endif

                                </td>

                            </tr>
                        @endforeach

                    @endif
					{{-- <tr>
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
					</tr> --}}
				</tbody>
			</table>
		</div>
	</div>
</x-warden-component.main>
