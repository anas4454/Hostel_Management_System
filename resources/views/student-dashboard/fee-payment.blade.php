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

            <h5 class="mb-3">Hostel Fee Payment</h5>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-box p-4">
                        {{-- <h6>Current Status: <span class="badge   {{ $fee->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">{{ $fee->status }}</span></h6> --}}
                        <p>Next Due: <strong>June 2026</strong></p>

                        {{-- <form action="{{ route('stripe.checkout', $fee->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                Pay Now
                            </button>
                        </form> --}}

                        @if ($booking && $fee)
                            @if ($fee->status == 'Unpaid')
                                <form action="{{ route('stripe.checkout', $fee->id) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        Pay Now
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-secondary" disabled>
                                    Already Paid
                                </button>
                            @endif
                        @else
                            <button class="btn btn-secondary" disabled>
                                Room Not Approved
                            </button>
                        @endif

                    </div>
                </div>
                {{-- _____________ --}}
                <div class="col-md-6">
                    <div class="card-box p-4">
                        <h5 class="mb-3">
                            Approved Room Details
                        </h5>
                        @if ($booking && $fee)
                            <p>
                                <strong>Room Number:</strong>
                                {{ $booking->room->room_number }}
                            </p>
                            <p>
                                <strong>Room Type:</strong>
                                {{ $booking->room->type }}
                            </p>
                            <p>
                                <strong>Seats:</strong>
                                {{ $booking->room->seats }}
                            </p>
                            <p>
                                <strong>Monthly Fee:</strong>
                                Rs. {{ number_format($fee->amount) }}
                            </p>
                            <p>
                                <strong>Fee Month:</strong>
                                {{ $fee->month }}
                                {{ $fee->year }}
                            </p>
                            <p>
                                <strong>Payment Status:</strong>
                                <span
                                    class="badge
                    {{ $fee->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $fee->status }}
                                </span>
                            </p>
                        @else
                            <div class="alert alert-warning">
                                No approved room found.
                            </div>
                        @endif
                    </div>
                </div>

                {{-- __________ --}}
            </div>
        </div>
    </div>
</x-student-component.main>
