<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NotificationMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    public function contact()
    {
        $innertitle = "Contact Us";
        $metatitle = $innertitle . " | Metagreen Innovations";
        return view('/Contact US', compact('metatitle', 'innertitle'));
    }
    public function sendmail(Request $request)
    {

        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'subject' => ['string', 'min:2', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:11'],
        ], ['phone.numeric' => 'Invalid phone format']);

        $metatitle = "Thank You";
        $user = $data['name'];
        $user_mail = $data['email'];
        $to = "contact@metagreeninnovations.com";

        Mail::to($to)->send(new SendMail($data));
        Mail::to($user_mail)->send(new NotificationMail($data));
        return view('thanks', compact('user', 'metatitle'));
    }
}
