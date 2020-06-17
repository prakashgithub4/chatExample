@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="chat_main">
    
    <div class="chat_main_frame">
        <!--chat header---->
        <header class="chat_header">
            <div class="logo_part">				
				<img class="logo" src="{{url('public/assets/images/logo1.png')}}" alt="logo">   
			</div>
            <div class="right_part">
                <nav>
                    <ul>
                        <li class="active">Chat</li>
                        <li>Group</li>
                        <li>Online</li>
                    </ul>
                </nav>
                <div class="profile">
                    <span>Raja Kar</span>
                </div>
            </div>
        </header>
        <!--chat header end---->
        <div class="chat_box">
            <div class="chat_frame">
                <div class="chat_frnd_list">
                    <div class="msg_chat_header">
                        <div class="chat_title">
                           <p>FRIENDS</p>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>Raja Kar</p>
                                    <p>This is Message...</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>Samir Nandi</p>
                                    <p>This is Message...</p>
                                </div>
                            </div>
                        </li>
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
                        <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>Raja Kar</p>
                                </div>
                                <div class="sign"></div>
                            </div>
                        </li>
                        <li>
                            <div class="frnd_list_list">
                                <div class="icon"><img style="width: 40px;" src="{{url('public/assets/images/avatar_male.svg')}}"></div>
                                <div class="frnd_details">
                                    <p>Samir Nandi</p>
                                </div>
                                <div class="sign"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



