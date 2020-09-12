<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function controllerMethod() {
    	return view('contact');
    }

    public function submit(Request $request) {
    	$data = request() -> validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
    	]);

        Mail::to('danlee746@hotmail.ca')->send(new ContactFormMail($data));

        return response()->json(null, 200);
    }
}
