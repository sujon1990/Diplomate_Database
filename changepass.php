
<?php include('server.php') ?>
<?php include ('header.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>

<link rel = "stylesheet"
   type = "text/css"
   href = "mystyle/style.css" />

</head>
<body>
  <div class="header">
  	<h2>Change Password</h2>
  </div>
	
  <form method="post" action="servechangepass.php">
  	
  	<div class="input-group">
  	  <label>PASSWORD</label>
  	  <input type="password" name="password_1" size="50">
  	</div>
   <br>
   
  	<div class="input-group">
  	  <label>CONFIRM PASSWORD</label>
  	  <input type="password" name="password_2" size="50">
  	</div>
    <br>
  	<div >
  	  <button type="submit" class="btn" name="reg_userpasschng" >Change Password</button>
  	</div>
    <br>
  </form>

</body>
</html>