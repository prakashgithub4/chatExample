<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $users = User::userRead(Auth::id());
         $activechat = User::activeChat(Auth::id());

        return view('home',compact('users','activechat'));
    }

      public function getMessage($user_id)
    {
        $my_id = Auth::id();
        $messages =  Message::getmessages($user_id, $my_id);
        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $data['from'] = Auth::id();
        $data['to'] = $request->receiver_id;
        $data['message'] = $request->message;
     
      Message::sendMessages($data);
    }
     public function status($u_id,$status){
       
      $user = User::status($u_id,$status);
      

    }
}
