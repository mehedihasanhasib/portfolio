<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);

        try {
            $data = $validated;
            Mail::to('mehedi.mh50@gmail.com')->send(new ContactMail($data));
            return back()->with('message', 'Your message has been sent successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error sending message! Please try again');
        }
    }
}
