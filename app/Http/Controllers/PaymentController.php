<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Transaction;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        if($paymentDetails['status'] === true){
            $item = Array();
            foreach ($paymentDetails['data']['metadata']['products'] as $key => $value) {
                $item[] =  $key;
            }
            $item_id = implode(',',$item);
            $payment = new Transaction;
            $payment->reference = $paymentDetails['data']['reference'];
            $payment->amount = $paymentDetails['data']['amount'];
            $payment->status = $paymentDetails['data']['status'];
            $payment->item_id = $paymentDetails['data']['metadata']['products']['id'];
            $payment->user_id = 2;
            if($payment->save()){
                return redirect('/')->with('success', 'Transaction completed successfully.');
            }else{
                return redirect('/cart')->with('error', 'Transaction could not be completed at this time, please try again');
            }
        }else{
            return back()->with('error', $paymentDetails['message']);
        }
    }
}
