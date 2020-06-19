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
                        <li class='user' id="{{ $user->id }}">
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
     
  
  <script>
$(document).ready(function(){
    let u_id = "{{Auth::id()}}";
    let url = "{{url('status/')}}"+"/"+u_id+"/"+'active';
     
      $.ajax({
                type: "get",
                url:url , // need to create this route
               
                cache: false,
                success: function (data) {
                 
                }
            });
      //   });
});
</script>
@endsection



