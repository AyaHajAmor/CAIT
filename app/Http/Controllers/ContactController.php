<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store ()
    {
        
        $data = request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'msg'=>'required|min:5'
        ]);
        Mail::to('aya2hajamor@gamil.com')->send(new ContactMail($data));
        return redirect('contact')->with('message', 'Merci pour votre message !');
    }
    public function contact(){
        return view('pages.contact');
    }
}
