<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sending;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class SendingController extends Controller
{

    public function contact(Request $request) {
        $request->validate([
            'email' => 'required',
            'message' => 'required',
            'photos' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
            
        ]);
        
        $newImageName = time() . '-' . $request->name . '.' . $request->photos->extension();
        
        $request->photos->move(public_path('uploads'), $newImageName);
        
        $data = [
            'email' => $request->email,
            'message' => $request->message,
            'photos' => $request->photos
            
        ];
               
        Mail::to('qyermon@gmail.com')->send(new DemoEmail($data));
        
        Sending::create([
            'email' => $request->email,
            'message' => $request->message,
            'photos' => $request->photos
        ]);

        

        return redirect('/timeto');

    }
}
