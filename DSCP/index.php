<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Cross Site Request Forgery Protection</title>
	</head>
	<body text="#ecf0f1" style="background-color:#2f3640">
	<h1> Cross Site Request Forgery - Double Submit Cookie Pattern </h1>
                <div id="main-wrapper">
		<center><h2><font color = "00FF00">Login Form</font></h2></center>
		<center><img src = "imgs/hacker.jpg" class="hacker"/><center>
                        <form class="form" action="result.php" method="post">
                            <br>
	<div class="form-group">
	<label><b>Username:</b></label><br>
	<input name="username" type="text" class="inputvalues" id="username" placeholder="Type your username" required/><br>
	</div><br>
	<div class="form-group">
	<label><b>Password:</b></label><br>
	<input name="password" type="password" id="password" class="inputpassword" placeholder="Type your password" required/><br>
	</div><br><br><br><br><br>
	<div class="form-group">
    <input type="submit" name="Login" class="login_btn" value="Login">
	</div>
	</form>
</div>
</body>


</html>
