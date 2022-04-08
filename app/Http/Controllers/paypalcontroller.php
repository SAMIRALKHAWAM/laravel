<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paypalcontroller extends Controller
{
   public function index(Request $request){
       $apiContext = new \PayPal\Rest\ApiContext(
           new \PayPal\Auth\OAuthTokenCredential(
               env('PAYPAL_SANDBOX_CLIENT_ID'),     // ClientID
               env('PAYPAL_SANDBOX_SECRET')      // ClientSecret
           )
       );

       $payer = new \PayPal\Api\Payer();
       $payer->setPaymentMethod('paypal');

       $amount = new \PayPal\Api\Amount();
       $amount->setTotal('150.00');
       $amount->setCurrency('USD');

       $transaction = new \PayPal\Api\Transaction();
       $transaction->setAmount($amount);

       $redirectUrls = new \PayPal\Api\RedirectUrls();
       $redirectUrls->setReturnUrl(route('paypal-return'))
           ->setCancelUrl(route('paypal-cancel'));

       $payment = new \PayPal\Api\Payment();
       $payment->setIntent('sale')
           ->setPayer($payer)
           ->setTransactions(array($transaction))
           ->setRedirectUrls($redirectUrls);

       try {
           $payment->create($apiContext);
           echo $payment;
           dd($payment);
           echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
       }
       catch (\PayPal\Exception\PayPalConnectionException $ex) {
           // This will print the detailed information on the exception.
           //REALLY HELPFUL FOR DEBUGGING
           echo $ex->getCode();
           echo $ex->getData();
dd($ex);
       }

   }
   public function paypalreturn(){

dd(\request()->all());

   }
   public function paypalcancel(){
return "order canceled";
   }



}
