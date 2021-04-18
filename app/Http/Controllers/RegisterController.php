<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index() {
        $register = Register::all();
        return view('index')->with(['registertable' => $register]);
    }
    public function uploadsubmit(Request $request) {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        

        Register::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect('/register');

    }
}
