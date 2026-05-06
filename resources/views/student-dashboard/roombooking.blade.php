<x-student-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
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
                                <td><span class="badge bg-success">{{$room->status}}</span></td>
                                <td><button class="btn btn-outline-success btn-sm">Book</button></td>
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
