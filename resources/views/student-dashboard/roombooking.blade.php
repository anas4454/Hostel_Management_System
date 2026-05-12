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

            
            <h5 class="mb-3">Room Booking</h5>
            <p class="text-muted">Select a room of your choice. Your booking will be sent to the warden for approval.</p>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Room Number</th>
                        <th>Type</th>
                        <th>Seats</th>
                        <th>Price (per month)</th>
                        <th>Features</th>
                        <th>Facilities</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example room row -->

                    @if ($rooms->isNotEmpty())
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>R00{{ $room->id }}</td>
                                <td>{{ $room->type }}</td>
                                <td>{{ $room->seats }}</td>
                                <td>Rs. {{ $room->price }}</td>
                                <td>{{ $room->features }}</td>
                                <td>{{ $room->facilities }}</td>

                                @php
                                    $approvedCount = $room->approvals->where('status', 'Approved')->count();
                                    $isFull = $approvedCount >= $room->seats;
                                    $studentRequest = $room->approvals->where('student_id', auth()->id())->first();

                                @endphp
                                <td>

                                    @if ($isFull)
                                        <span class="badge bg-danger">
                                            Full
                                        </span>
                                    @elseif($studentRequest && $studentRequest->status == 'Pending')
                                        <span class="badge bg-warning text-dark">
                                            Pending Approval
                                        </span>
                                    @elseif($studentRequest && $studentRequest->status == 'Approved')
                                        <span class="badge bg-success">
                                            Approved
                                        </span>
                                    @elseif($studentRequest && $studentRequest->status == 'Rejected')
                                        <span class="badge bg-danger">
                                            Rejected
                                        </span>
                                    @else
                                        <span class="badge bg-success">
                                            Available
                                        </span>
                                    @endif

                                </td>
                                <td>
                                    <form action="{{ route('student.book-room', $room->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-outline-success btn-sm">
                                            Book
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    @endif

                    {{-- <tr>
                        <td>2</td>
                        <td>102</td>
                        <td>Single</td>
                        <td>1</td>
                        <td>Rs. 15,000</td>
                        <td>AC, Balcony</td>
                        <td>WiFi, Laundry, Fridge</td>
                        <td><span class="badge bg-warning text-dark">Pending Approval</span></td>
                        <td><button class="btn btn-outline-secondary btn-sm" disabled>Booked</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>103</td>
                        <td>Triple Sharing</td>
                        <td>3</td>
                        <td>Rs. 8,000</td>
                        <td>Non-AC</td>
                        <td>WiFi</td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td><button class="btn btn-outline-success btn-sm">Book</button></td>
                    </tr> --}}
                </tbody>
            </table>
            <div class="alert alert-info mt-4">
                <strong>Note:</strong> After booking, your request will be sent to the warden for approval. Once
                approved, you can move into your selected room.
            </div>
        </div>
    </div>
</x-student-component.main>
