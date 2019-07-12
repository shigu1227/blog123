<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<center>
	<h1>登录</h1>
	<form action="{{url('student/do_login')}}" method="post">
		用户名：<input type="text" name="name"></br>
		密  码：<input type="password" name="password"><br>
		<input type="submit" value="提交">
	</form>
	</center>
</body>
</html>