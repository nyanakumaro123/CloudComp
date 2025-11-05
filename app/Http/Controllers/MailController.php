<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail(Request $request) {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
            'birth_date' => 'required|date|before_or_equal:today',
            'subject' => 'required|string|max:50',
            'message' => 'required|string'  
        ]);

        $data = Email::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
            'birth_date' => $request->birth_date,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        Mail::to($request->email)->send(new TestMail($request));
        return redirect()->route('index')->with('success', 'Document added successfully.');
    }

    public function index() {
        return view('welcome', [
        'email' => Email::get()
    ]);
    }
    
    public function sent() {
        return view('send_email_template', [
        'data' => Email::get()
    ]);
    }

//     public function create(Request $request) {
//         $request->validate([
//             'name' => 'required|string|max:50',
//             'email' => 'required|string|max:50',
//             'subject' => 'required|string|max:50',
//             'message' => 'required|string'  
//         ]);

//         $data = Email::Create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'subject' => $request->subject,
//             'message' => $request->message
//         ]);

//         return redirect()->route('index')->with('success', 'Document added successfully.');
//     }
}
