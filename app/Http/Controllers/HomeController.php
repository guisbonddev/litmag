<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function about()
    {
    	$staffs = \App\User::
    		where('role_id','=','1')
    	->get();

    	return view('about', compact('staffs'));
    }

    public function home()
    {
    	$edition = \App\Edition::
    		where('current_edition','=','1')
    	->first();

    	return view('home', compact('edition'));
    }

    public function contact(Request $request)
    {

        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required'
        ));
        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'comments' => $request->comments
        );
        
         Mail::send('emails.contact', $data, function ($message) {
            $message->from('wguisbond@gmail.com');
            $message->to('litmag@jd.cnyric.org');
            $message->subject('Rambunctious Contact Request');
        }); 
        
        
    } 
}
