<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request) {
        $request->validate([
            'email' => 'required',
            'message' => 'required',
            'photos' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
            
        ]);
        
        $data = [
            'email' => $request->email,
            'message' => $request->message,
            'photos' => $request->photos
            
        ];
               
        Mail::to('qyermon@gmail.com')->send(new DemoEmail($data));

        return redirect('/timeto');

    }
}
