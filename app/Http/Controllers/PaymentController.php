<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Transaction;
use Auth;
use Cart;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        // $paystack = new Paystack();
        // $user = Auth::user();
        // $request->email = $user->email;
        // $request->amount = $amount;
        // $request->reference = $paystack->genTranxRef();
        // $request->key = config('paystack.secretKey');
        // return $paystack->getAuthorizationUrl()->redirectNow();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $user_id = Auth::user()->id;
        $paymentDetails = Paystack::getPaymentData();
        if($paymentDetails['status'] === true){
            $item = Array();
            foreach ($paymentDetails['data']['metadata']['products'] as $key => $value) {
                $item[] =  $key;
                Cart::session($user_id)->remove($key);
            }
            $item_id = implode(',',$item);
            $payment = new Transaction;
            $payment->reference = $paymentDetails['data']['reference'];
            $payment->amount = ($paymentDetails['data']['amount']/100);
            $payment->status = $paymentDetails['data']['status'];
            $payment->item_id = $item_id;
            $payment->user_id = $user_id;
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
