<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create(){
        return view('feedback-form');
    }

    public function send(Request $request){
        $request->validate([
            'fullname' => 'required|max:100',
            'email'=> 'required|email',
            'comment'=>'required'
        ]);


        $fullname= $request->input('fullname');
        $email= $request ->input('email');
        $comment= $request ->input('comment');

        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
     ->send(new Feedback($fullname, $email, $comment));

        return redirect('/feedback/success');
    }

    public function success(){
        return view('success');
    }

    
}
