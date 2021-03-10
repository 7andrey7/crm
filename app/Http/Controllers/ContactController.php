<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequestInformation;

class ContactController extends Controller
{
  
    public function sendInZoho(Request $request)
    {
        $quantity = $request->quantity;
        $price = 500;
        $amount = $quantity * $price;
        
        //Send to ZohoCRM
        if ((new InsertRecordsController())->execute($amount)) {
            return "Data send in ZOHO CRM";
        } else {
            return "Data no send in ZOHO CRM";
        }
       
    }
}
