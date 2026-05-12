<x-warden-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">Fee Payment Overview</h5>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    @if ($fees->isNotEmpty())

                        @foreach ($fees as $fee)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $fee->student->name ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $fee->student->email ?? 'N/A' }}
                                </td>

                                <td>
                                    <span
                                        class="badge
                                        {{ $fee->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">
                                        {{ $fee->status }}
                                    </span>
                                </td>
                               
                                <td>

                                    Rs.
                                    {{ number_format($fee->amount, 2) }}

                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>

                            <td colspan="6" class="text-center">

                                No fee records found.

                            </td>

                        </tr>

                    @endif
                    {{-- <tr>
						<td>1</td>
						<td>Ahmed Khan</td>
						<td>101</td>
						<td><span class="badge bg-success">Paid</span></td>
						<td>May 2026</td>
						<td>Rs. 10,000</td>
					</tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</x-warden-component.main>
