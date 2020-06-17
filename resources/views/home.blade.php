@extends('layouts.app')

@section('content')
      
            <div class="chat_frame">
                <div class="chat_frnd_list">
                    <div class="msg_chat_header">
                        <div class="chat_title">
                           <p>FRIENDS</p>
                        </div>
                    </div>
                    <ul>
                        <!-- <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>Raja Kar</p>
                                    <p>This is Message...</p>
                                </div>
                            </div>
                        </li> -->
                          @foreach($users as $user)
                        <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>{{ $user->name }}</p>
                                    <p>This is Message...</p>
                                </div>
                            </div>
                        </li>
                          @endforeach
                    </ul>

                    
                </div>
                <div class="chat_content">
                    <div class="msg_chat_header">
                        <div class="chat_title">
                           <p>CHAT</p>
                        </div>
                        <div class="chat_hicons">
                            <ul>
                                <li><img src=""></li>
                                <li><img src=""></li>
                                <li><img src=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat_cont">
                        <ul>
                            <li class="user">
                                <div class="chat_block">
                                    <div class="user_pic"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                    <div class="chat_msg">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="me">
                                <div class="chat_block">
                                    <div class="user_pic"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                    <div class="chat_msg">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="user">
                                <div class="chat_block">
                                    <div class="user_pic"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                    <div class="chat_msg">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="msg_send_block">
                        <div class="text_msg_block">
                            <textarea></textarea>
                            <span>
                                <input type="file">
                            </span>
                        </div>
                        <div class="send_button">
                            <button><img src="{{url('public/assets/images/send.svg')}}"></button>
                        </div>
                    </div>
                </div>
                <div class="chat_online">
                    <div class="msg_chat_header">
                        <div class="chat_title">
                           <p>ONLINE</p>
                        </div>
                    </div>
                    <ul>
                          @foreach($activechat as $online)
                        <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>{{$online['name']}}</p>
                                </div>
                                <div class="sign"></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
     
  

@endsection



