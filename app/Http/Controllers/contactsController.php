<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use App\Newsletter;

class contactsController extends Controller
{
        public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
       
        Contact::create($request->all());

        $name = $_POST['name'];

        
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


