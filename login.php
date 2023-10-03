<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
<link rel = "stylesheet"
   type = "text/css"
   href = "mystyle/style.css" />

</head>

<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>USER NAME</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>PASSWORD</label>
  		<input type="password" name="password">
  	</div>
  	<div >
  		<button class="btn" type="submit"  name="login_user">Login</button>
  	</div>
  </form>
</body>
</html>