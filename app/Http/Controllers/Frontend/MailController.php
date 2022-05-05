<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
      $details_mail = session()->get('details_mail');
      $details = [
        'name' => $details_mail['name'],
        'email' => $details_mail['email'],
        'message' => $details_mail['message']
      ];

      Mail::to('aceluuhang@gmail.com')->send(new TestMail($details));

      return redirect('/')->with('status','Gửi mail thành công.');
    }

    public function info_mail(Request $request)
    {
      $details['name'] = $request->Name;
      $details['email'] = $request->Email;
      $details['message'] = $request->Message;
      session()->put(['details_mail' => $details]);

      return redirect('/send-mail');
    }
}