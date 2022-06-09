<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Configuration;
use App\Mail\SendEmail;
use App\Models\NotifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;

class NotifyEmailController extends Controller
{
    //

    public function index()
    {
        
        return view('/');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'phone'  =>  'required',
            'message' => 'required'
           ]);

        $mailData = new NotifyEmail;
        $mailData->name = $request->name;
        $mailData->email = $request->email;
        $mailData->phone = $request->phone;
        $mailData->message = $request->message;
        $mailData->save();


        Mail::to($mailData->email)->send(new SendEmail($mailData));
        
        return redirect('/')->with('status', 'Check your email for your Booking Confirmation');

    
    }

}
