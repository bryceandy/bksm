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
            'client' => 'min:3',
            'email' => 'required|email',
            'number' => 'required',
            'day' => 'required|date',
            'serv' => 'required'
        ]);

        $objClient = new \stdClass();
        $objClient->name = $request->client;
        $objClient->email = $request->email;
        $objClient->number = $request->number;
        $objClient->day = $request->day;
        $objClient->serv = $request->serv;

        try
        {
            Mail::to('brendakinariki@hotmail.com')->send(new BookingEmail($objClient));
            return redirect('/booking')->with(['success' => 'Your Request was Successful!']);
        }
        catch(\Throwable $e)
        {
            return redirect('/booking')->with(['fail' => $e->getMessage()]);
        }
    }
}
