<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\File;

class FilesController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->all());
        
        $title = $request->input('title');
        $message = $request->input('message');
        $destination = 'user_files/';
        $fileName = date('U').'_'.$request->file('file')->getClientOriginalName();
            
        if ($request->hasFile('file')) {
            $path = $request->file('file')->move($destination, $fileName);
            File::create([
                'title' => $title,
                'file' => $path,
                'message' => $message,
            ]);
                
        return view('/admin');
        } 
    }
}
