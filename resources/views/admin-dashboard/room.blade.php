<x-admin-component.main>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Room Management</h3>
            <button class="btn btn-success">Add Room</button>
        </div>
        <div class="card-box">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Room No</th>
                        <th>Type</th>
                        <th>Occupied</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    @if ($rooms->isNotEmpty())

                        @foreach ($rooms as $room)
                            @php
                                $occupied = $room->approvals->where('status', 'Approved')->count() > 0;
                            @endphp
                            <tr>
                                <td>
                                    {{ $room->room_number }}
                                </td>
                                <td>
                                    {{ $room->type }}
                                </td>

                                <td>
                                    @if ($occupied)
                                        <span class="badge bg-success">
                                            Yes
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            No
                                        </span>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">
                                No rooms found.
                            </td>
                        </tr>
                    @endif
                   
                </tbody>
            </table>
        </div>
    </div>
</x-admin-component.main>
