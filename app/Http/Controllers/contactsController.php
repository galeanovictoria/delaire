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
        
        
        $data = array(
        'name' => $request->name,
        'email' => $request->email
        );
      
        
        
        Mail::send('emails.contactNote', $data, function ($m) use ($data) {
            $m->from('galeano.victoria@gmail.com', 'Your Contact');

            $m->to($data->email, $data->name)->subject('Thank you for contacting us.');
        });

        $name = $_POST('name');
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


