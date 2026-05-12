<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
      public function index()
    {
        return view('student-dashboard.fee-payment');
    }

    // Stripe Checkout
    public function checkout(Request $request , Fee $fee)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([



            'payment_method_types' => ['card'],

            'line_items' => [[

                'price_data' => [

                    'currency' => 'Pkr',

                    'product_data' => [
                        'name' => 'Hostel Fee Payment',
                    ],

                    'unit_amount' => $fee->amount * 100,
                ],

                'quantity' => 1,

            ]],

            'mode' => 'payment',

            'success_url' => route('stripe.success', $fee->id),

            'cancel_url' => route('student.fee-payment'),

        ]);

        return redirect($session->url);
    }

    // Success Page
    public function success(Fee $fee)
    {
         $fee->update([

            'status' => 'Paid',
            'paid_at' => now(),
            ]);

        return redirect()
            ->route('student.fee-payment')
            ->with(
                'success',
                'Payment Successful.');
    }
}
