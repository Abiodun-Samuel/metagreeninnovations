<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NotificationMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Mail;
use Newsletter;
use Redirect;

class FormController extends Controller
{
    public function contact()
    {
        $innertitle = "Contact Us";
        $metatitle = $innertitle . " | Metagreen Innovations";
        return view('/Contact Us', compact('metatitle', 'innertitle'));
    }
    public function sendmail(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'subject' => ['string', 'min:2', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:11'],
            'g-recaptcha-response' => function ($attribute, $value, $fail) {
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIp = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIp";
                $response = \file_get_contents($url);
                $response = json_decode($response);

                if (!$response->success) {
                    Session::flash('Please check reCaptcha');
                    $fail('Google Recaptcha Failed, Please Check the reCaptcha');
                }
            },
        ], ['phone.numeric' => 'Invalid phone format']);

        $metatitle = "Thank You";
        $message = " Thank you for contacting us, we'd get back to you promptly.";
        $user = $data['name'];
        $user_mail = $data['email'];
        $to = "contact@metagreeninnovations.com";

        try {Mail::to($to)->send(new SendMail($data));
            Mail::to($user_mail)->send(new NotificationMail($data));
            return view('thanks', compact('user', 'metatitle', 'message'));

        } catch (\Swift_TransportException$exception) {
            return Redirect::to('/Contact Us')->with('error', 'Error! Messsage not sent. Please try again.');
        };

    }
    public function subscribe(Request $request)
    {
        $subscriber_mail = $request->validate(['email' => ['required', 'email']]);
        $message = " Thank you for subscribing to our newsletter";
        $metatitle = "Thank You";
        $user = "";
        $user_mail = $subscriber_mail['email'];

        Newsletter::subscribe($user_mail);
        return view('thanks', compact('user', 'metatitle', 'message'));
    }
}
