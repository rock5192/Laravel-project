<?php

namespace App\Http\Controllers;

use Newsletter;
use Session;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        if(!Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->user_email);
           
            Session::flash('success','You have successfully subscribed');
            return redirect()->back();
        }

        return redirect()->back();

        
    }
}
