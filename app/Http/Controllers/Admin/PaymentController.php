<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;


class PaymentController extends Controller
{
    public function stripe($id)
    {
        $subscription = Subscription::find($id);
        return view('admin.Website.payment.payment',compact('subscription'));
    }

    public function stripePost(Request $request,$id)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $subscription = Subscription::find($id);
        Stripe\Charge::create ([
            "amount" => $subscription->price * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => $subscription->description
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
