<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use App\Newsletter;

use Mail;



class contactsController extends Controller
{
        public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
       
        Contact::create($request->all());

        $name = $_POST['name'];
        
        Mail::send('emails.contactNote', ['user' => $user], function ($m) use ($user) {
            $m->from('galeano.victoria@gmail.com', 'Your Contact');

            $m->to($user->email, $user->name)->subject('Thank you for contacting us.');
        });

        
        return view('/thankyou', compact('name'));
    }
    
    public function showthanks(){
        return view('thankyou');
    }
    
      public function newsletter(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
       
        Newsletter::create($request->all());

        $name = $_POST['name'];

        
        return view('/thankyou', compact('name'));
    }
    
    
    
}


