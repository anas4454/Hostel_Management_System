<x-student-component.main>

<div class="container-fluid p-4">



    <div class="card-box">
        <h5 class="mb-4">Pay Monthly Fee</h5>

        <form id="payment-form">

            <div class="row g-3">

                <!-- Student Name -->
                <div class="col-md-6">
                    <label class="form-label">Student Name</label>
                    <input type="text" class="form-control"
                        value="{{ auth()->user()->name }}" readonly>
                </div>

                <!-- Month -->
                <div class="col-md-6">
                    <label class="form-label">Fee Month</label>
                    <input type="text"
                        class="form-control"
                        value="{{ now()->format('F Y') }}" readonly>
                </div>

                <!-- Amount -->
                <div class="col-md-6">
                    <label class="form-label">Amount (PKR)</label>
                    <input type="text" class="form-control" value="10000" readonly>
                </div>

                <!-- Stripe Card Element -->
                <div class="col-12">
                    <label class="form-label">Card Details</label>
                    <div id="card-element" class="form-control p-3"></div>
                </div>

                <div id="card-errors" class="text-danger mt-2"></div>

                <!-- Submit -->
                <div class="col-12">
                    <button id="submit-button" class="btn btn-success px-4 mt-2">
                        Pay Now
                    </button>
                </div>

            </div>
        </form>

    </div>

</div>
{{--
<!-- STRIPE JS -->
<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");
    const elements = stripe.elements();

    const card = elements.create("card");
    card.mount("#card-element");

    const form = document.getElementById("payment-form");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const {paymentMethod, error} = await stripe.createPaymentMethod({
            type: "card",
            card: card,
        });

        if (error) {
            document.getElementById("card-errors").innerText = error.message;
        } else {
            fetch("{{ route('student.stripe.charge') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    payment_method: paymentMethod.id
                })
            })
            .then(res => res.json())
            .then(data => {
                if(data.success){
                    window.location.reload();
                } else {
                    alert("Payment failed");
                }
            });
        }
    });
</script> --}}

</x-student-component.main>
