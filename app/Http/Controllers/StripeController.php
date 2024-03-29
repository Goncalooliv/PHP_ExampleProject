<?php

namespace App\Http\Controllers;

use App\Mail\PaymentConfirmationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Empresas;
use Illuminate\Support\Facades\Mail;
use Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * Retorna a view responsável pelo pagamento do anúncio
     */
    public function showpagamento($id)
    {
        $anuncioId = $id;
        Empresas::where('id', $anuncioId)->update(['premium' => 1]);
        return view('stripe',['anuncioId' => $anuncioId]);
    }

    /** 
     * handling payment with POST
     */
    public function call(Request $request)
    {

        \Stripe\Stripe::setApiKey('sk_test_51MNyg5F93OVT75H9MnGD8EnFHA66HBVJH58X6mtkUyjqNNFXvLQ365KQUP15ka3Hl2fDc2ptHVQEvKQwQck9KqoI00mXSJSOBj');
        Stripe\Charge::create ([
                "amount" => 100 * 5,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Making test payment."
                
        ]);

        return redirect()->route('selfAnnouncements');
    }
}
