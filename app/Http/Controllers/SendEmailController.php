<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\SendEmailRequest;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function EmailFromContactMe(SendEmailRequest $request)
    {
        $email = $request->input('email');
        $sujet = $request->input('sujet');
        Mail::send('sendEmail.EmailFromContactMe', $request->all(), function($message)
            {
                $message->to('patrissolkemfouet@gmail.com')->subjet('sujet');
            });
        
        $ActualUrl = $request->path();
        $confirm = "Message envoyer avec success !";
        if($ActualUrl == "about")
        {
            return redirect('about')->withOK($confirm);
        } else {
            return redirect('contact')->withOK($confirm);
        }
        
    }
}
