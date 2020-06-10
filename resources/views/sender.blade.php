<html>
<head>
	<title>demo</title>
</head>
<body>
	<form action="{{url('sending')}}" method="post">
		@csrf
     content:
     <input type="text" name="content"/>
     <input type="submit" value="submit"/>
	</form>
</body>
</html>