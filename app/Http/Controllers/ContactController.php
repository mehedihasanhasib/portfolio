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
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max:2', 'email'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            defer(function () {
                Mail::to('mehedi.mh50@gmail.com')->send(new ContactMail());
            });

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.'
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
