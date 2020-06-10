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
                <div class="login-box">
                    <div class="form_frame">
                        <form>
                            <div class="form_row">
                                <div class="form_item">
                                    <input type="email" placeholder="Enter Email" required>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_item">
                                    <input type="Password" placeholder="Enter Password" required>
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
                                        <input type="checkbox">
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
                    <div class="reg-form">
                        <div class="form_row">
                            <div class="form_item">
                                <input type="name" placeholder="Enter name" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="email" placeholder="Enter Email" required>
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
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="date" placeholder="Enter Date" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="password" placeholder="Enter password" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <input type="password" placeholder="confirm Password" required>
                            </div>
                        </div>
                        <div class="form_row butn_box">
                            <div class="form_item">
                                <input type="submit" value="Sign up">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</body>
</html>