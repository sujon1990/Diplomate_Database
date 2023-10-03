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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>USERNAME</label>
  	  <input type="text" name="username" size="50">
  	</div>
    <br>
   
    <div class="input-group">
      <label>DGFI ID</label>
      <input type="text" name="dgfiid" size="50">
    </div>
    <br>
    
    <div class="input-group">
      <label>APPOINTMENT</label>
      <input type="text" name="appointment" size="50">
    </div>
    <br>
    
    <div class="input-group">
      <label>EMAIL</label>
      <input type="email" name="email" size="50">
    </div>
    <br>

    <table>
        <tr>
            <td>  <label>ROLE</label>
                <select name="role">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select></td>
            <td> <label style="padding-left: 20px">AREA</label>
                <select name="zonee">
                    <option value="DGFI">DGFI Headquarters</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Rangamati">Rangamati</option>
                    <option value="Kaptai">Kaptai</option>
                    <option value="Savar">Savar</option>
                    <option value="Ghatail">Ghatail</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Jessore">Jessore</option>
                    <option value="Cumilla">Cumilla</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Cox's-Bazar">Cox's Bazar</option>
                    <option value="Rajendrapur">Rajendrapur</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Khagrachari">Khagrachari</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Narayangonj">Narayangonj</option>
                    <option value="Satkhira">Satkhira</option>
                    <option value="Dinajpur">Dinajpur</option>
                </select></td>
        </tr>
    </table>

      <br>

  
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
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
    <br>
  </form>
</body>
</html>