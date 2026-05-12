<x-student-component.main>

<div class="container-fluid p-4">


    <div class="card-box p-4">

        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">

            <div>
                <h4 class="fw-bold mb-1">
                    Hostel Fee Checkout
                </h4>

                <p class="text-muted mb-0">
                    Current Month Fee Payment
                </p>
            </div>

            <span class="badge bg-warning text-dark px-3 py-2">
                {{ $fee->month }} {{ $fee->year }}
            </span>
        </div>

        <div class="row g-4">

            <div class="col-md-6">

                <div class="border rounded p-4 h-100">

                    <h5 class="mb-4 fw-bold">
                        Student Information
                    </h5>

                    <p>
                        <strong>Name:</strong>
                        {{ auth()->user()->name }}
                    </p>

                    <p>
                        <strong>Email:</strong>
                        {{ auth()->user()->email }}
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
                        <strong>Status:</strong>

                        <span class="badge {{ $fee->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">
                            {{ $fee->status }}
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-6">

                <div class="border rounded p-4 h-100">

                    <h5 class="mb-4 fw-bold">
                        Payment Details
                    </h5>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Room Fee</span>
                        <strong>Rs. {{ number_format($fee->amount) }}</strong>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Month</span>
                        <strong>{{ $fee->month }}</strong>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <span>Total</span>
                        <strong class="fs-5 text-success">
                            Rs. {{ number_format($fee->amount) }}
                        </strong>
                    </div>

                    @if($fee->status == 'Unpaid')

                    <form method="POST"
                          action="{{ route('stripe.checkout', $fee->id) }}">

                        @csrf

                        <button type="submit"
                                class="btn btn-success w-100 py-2">

                            Pay Now

                        </button>

                    </form>

                    @else

                    <button class="btn btn-secondary w-100" disabled>
                        Already Paid
                    </button>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

</x-student-component.main>
