<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BookingEmail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function book(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:3',
            'email' => 'required|email',
            'number' => 'required',
            'day' => 'required|date',
            'serv' => 'required'
        ]);

        $objClient = new \stdClass();
        $objClient->name = $request->name;
        $objClient->email = $request->email;
        $objClient->number = $request->number;
        $objClient->day = $request->day;
        $objClient->serv = $request->serv;

        if(Mail::to("hello@bryceandy.com")->send(new BookingEmail($objClient)))
        {
            return view('booking')->with(['success' => 'Your Request was Successful!']);
        }
        else{
            return view('booking')->with(['fail' => 'Failed Sending Request!']);
        }
    }
}
