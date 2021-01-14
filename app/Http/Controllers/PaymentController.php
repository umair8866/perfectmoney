<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){
        $PAYEE_ACCOUNT="abcde";
        $PAYEE_NAME="farhan";
        $PAYMENT_AMOUNT="100";
        $PAYMENT_UNITS="USD";
        $PAYMENT_URL="test.com";
        $NOPAYMENT_URL="test.com";
        $PAYMENT_ID="pid11";
        $STATUS_URL="";
        $PAYMENT_URL_METHOD="";
        $NOPAYMENT_URL_METHOD="";
        $MEMO="";

        return view('payment',compact('PAYEE_ACCOUNT','PAYEE_NAME','PAYMENT_AMOUNT','PAYMENT_UNITS','PAYMENT_URL','NOPAYMENT_URL','PAYMENT_ID','STATUS_URL','PAYMENT_URL_METHOD','NOPAYMENT_URL_METHOD','MEMO'));
    }
}
