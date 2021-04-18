<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sending;

class SendingController extends Controller
{
    public function uploadsubmit(Request $request) {
        $request->validate([
            'email' => 'required',
            'fileName' => 'required|mimes:jpg,png,jpeg,gif|max:5048',
            'message' => 'required'
            
        ]);
        
        $newImageName = time() . '-' . $request->name . '.' . $request->fileName->extension();
        
        $request->fileName->move(public_path('uploads'), $newImageName);

        Sending::create([
            'email' => $request->email,
            'fileName' => $newImageName,
            'message' => $request->message
        ]);

        return redirect('/sending');

    }
}
