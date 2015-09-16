<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /**
     * @param SendEmailRequest $request
     * @return \Illuminate\View\View
     */
    public function store(SendEmailRequest $request)
    {
        $input = $request->only('name', 'email', 'message');

        $headers = "From: {$input['email']}" . "\r\n" .
            "Reply-To: {$input['email']}" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        //send basic txt email with good old php function
        $success = mail(env('WEBMASTER'), 'Nosmokers contact form', $input['message'], $headers);

        return view('message')->with(compact('success'));
    }
}
