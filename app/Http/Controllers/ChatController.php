<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\FormSubmitted;

class ChatController extends Controller
{
    //
    public function index(){
    	return view('chat');
    }

    public function send(Request $request)
    {
    	$text = $request->input('content');

    	event(new FormSubmitted($text));
    }
}
