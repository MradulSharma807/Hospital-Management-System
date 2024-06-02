<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" type="text/css" href="adminlogin.css"/>
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		
		<div class="login-form">
			<div class="sign-in-htm">
			<form action="adminloginvalidification.php" method="POST" >
				<div class="group">
					<label for="user" class="label">User Name</label>
					<input id="user" type="text" name="username" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" >
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			<script>

  </script>
  

				</form>
			</div>
			<div class="sign-up-htm">
			<form action="adminloginregistration.php" method="POST" >
				<div class="group">
					<label for="user" class="label">User Name</label>
					<input id="user" type="text" name="username" class="input" required >

				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password"class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<input id="pass" type="password" name="confirmpassword" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" name="emailid" class="input" required>
				</div>
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign Up" >
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
