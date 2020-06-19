<div class="chat_cont ">
    <ul class="messages">
           @foreach($messages as $message)
        <li class="{{($message->from == Auth::id()) ? 'me' : 'user' }}">
            <div class="chat_block">
                <div class="user_pic"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                <div class="chat_msg">
                    <p>{{ $message->message }}</p>
                </div>
            </div>
        </li>
           @endforeach
      
    </ul>
 </div>

  <div class="msg_send_block">
        <div class="text_msg_block">
            <textarea id="message"></textarea>
            <span>
                <input type="file">
            </span>
        </div>
        <div class="send_button">
            <button onclick="sendmessage()"><img src="{{url('public/assets/images/send.svg')}}"></button>
        </div>
</div>