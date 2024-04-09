<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function contact(){
       return view('contact');
   }

    public function store(Request $request){
        $reqs = $request->validate([
            'name' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
            'email' => 'required|email',
        ]);
        $data = new ContactUs();
        $data->name = $request->name;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->email = $request->email;

        if( $data->save()){
            return redirect()->back()->with(['message' => 'Saved successfully']);
        }
        return redirect()->back()->withErrors( 'Unable to save successfully');

    }


}
