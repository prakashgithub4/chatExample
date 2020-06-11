<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/style.css')}}">
    <script src="{{url('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('public/assets/js/custom.js')}}"></script>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main_frame">
		<header>
			<div class="logo_part">				
				<img class="logo" src="{{url('public/assets/images/logo1.png')}}" alt="logo">
				<span>Welcome To FChat</span>
			</div>
			<div class="contact_us">
				<a href="#">+91-999999999</a>
			</div>
        </header>
        <section class="login-frame">
            <div class="container">
                <div class="head">
                    <p>Log in to FChat</p>

                </div>
                  <small id ="success"></small>
                <div class="login-box">

                    <div class="form_frame">
                         <form method="POST" action="{{ route('login') }}">
                           @csrf

                            <div class="form_row">

                                <div class="form_item">
                                    <input type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_item">
                                    
                                    <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                     
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form_row butn_box">
                                <div class="form_item">
                                    <input type="submit" value="Sign in">
                                </div>
                            </div>
                            <div class="forgot">
                                <div class="form_item">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>Forgot Password</span>
                                    </label>
                                    <div class="signup">
                                        <a>Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>   
        <div class="pop_frame">
            <div class="inner_box">
                <!-- <div class="res_head"><p>Register Now</p><p><span>F</span><span>Chat</span></p></div> -->
                <div class="reg-box">
                    <div class="close">X</div>
                    <div class="res_head"><p>Register Now</p><p><img src="{{url('public/assets/images/logo1.png')}}" alt="logo"></p></div>
                      <form method="POST" id="register">
                        @csrf
                    <div class="reg-form">
                        <div class="form_row">
                            <div class="form_item">
                                <input type="name" placeholder="Enter name" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required>
                                
                                    <span class="invalid-feedback" role="alert" >
                                        <strong id="error_name"></strong>
                                    </span>
                               
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="email" placeholder="Enter Email" name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                               
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="error_email"></strong>
                                    </span>
                              
                            </div>
                        </div>
                        <div class="form_row gender">
                            <div class="form_item">
                               <label>
                                   <input type="radio" name="gender" value="male"><span>Male</span>
                               </label>
                            </div>
                            <div class="form_item">
                                <label>
                                    <input type="radio" name="gender" value="Female"><span>Female</span>
                                </label>
                             </div>
                             <span class="invalid-feedback" role="alert">
                                        <strong id="error_gender"></strong>
                                    </span>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="date" name="dob" placeholder="Enter Date" required>

                                <span class="invalid-feedback" role="alert">
                                        <strong id="error_date"></strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="password" placeholder="Enter password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="error_password"></strong>
                                    </span>
                              
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" placeholder="confirm Password"/>
                                <span class="invalid-feedback" role="alert">
                                        <strong id="error_cpassword"></strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form_row butn_box">
                            <div class="form_item">
                                <input type="button" value="Sign up" onclick="add()">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
	</div>
</body>
</html>
<script>
function add(){
     var formData = $("#register").serializeArray();
     
          $.ajax({
            url: "{{ route('register') }}",
            type: 'post',
            data:formData,
            datatype: 'json'
        })
        .done(function (data) { 
      console.log(data);
            if(data.status==1){
                 $("#error_name").html(data.error.name);
                 $("#error_name").show();
                 $("#error_email").html(data.error.email);
                  $("#error_email").show();
                 $("#error_gender").html(data.error.gender);
                $("#error_gender").show();
                 $("#error_date").html(data.error.dob);
                 $("#error_date").show();
                 $("#error_password").html(data.error.password[0]);
                 $("#error_password").show();
                $("#error_cpassword").html(data.error.password[1]);
                 $("#error_cpassword").show();
            }
            else{
                 $("#error_name").hide()
               //  $("#error_name").show();
                 $("#error_email").hide()
                 // $("#error_email").show();
                 $("#error_gender").hide()
                // $("#error_gender").show();
                 $("#error_date").hide()
                 // $("#error_date").show();
                 $("#error_password").hide()

                 $("#error_cpassword").hide();
                   $('#register')[0].reset()
                $('.pop_frame').slideUp('slow');
               $("#success").text(data.message);
             
            }
     
         
           
         })
        .fail(function (jqXHR, textStatus, errorThrown) { 
         console.log('error');
         });
}

</script>