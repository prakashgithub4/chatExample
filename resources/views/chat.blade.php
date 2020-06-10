<!DOCTYPE html>
<html>
<head>
	<title>Pusher Test</title>
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
	/* body{
		background-color: red;
	} */
	</style>
	<script src="https://js.pusher.com/6.0/pusher.min.js"></script>
	<script>

		// Enable pusher logging - don't include this in production
		Pusher.logToConsole = true;

		var pusher = new Pusher('12d9da88c545d19af2c5', {
			cluster: 'eu'
		});

		var channel = pusher.subscribe('my-channel'); // channel 
		channel.bind('form-submitted', function(data) { // e
			alert(JSON.stringify(data));
		});
	</script>
</head>
<body>
	<!-- <h1>Pusher Test</h1>
	<p>
		Try publishing an event to channel <code>my-channel</code>
		with event name <code>my-event</code>.
	</p> -->
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
	</div>
</body>
</html>