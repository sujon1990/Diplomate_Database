 <?php
session_start();

// initializing variables
$username = "";
$email    = "";
$zonee = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "EALBDB", "4d9B7lAo5dTKvvUY", "project");
mysqli_query($db,'SET CHARACTER SET utf8');
mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $dgfiid = mysqli_real_escape_string($db, $_POST['dgfiid']);
  $appointment = mysqli_real_escape_string($db, $_POST['appointment']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $zonee = mysqli_real_escape_string($db, $_POST['zonee']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($dgfiid)) { array_push($errors, "DGFI ID is required"); }
  if (empty($appointment)) { array_push($errors, "Appointment is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($role)) { array_push($errors, "Role is required"); }
  if (empty($zonee)) { array_push($errors, "Zone is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query2 = "INSERT INTO project.users(username, dgfiid, appointment, email, user_type, zonee, password) 
  			  VALUES('$username', '$dgfiid', '$appointment', '$email', '$role', '$zonee','$password')";
  	mysqli_query($db, $query2);
  	$_SESSION['username'] = $username;
  	$_SESSION['zonee'] = $zonee;
    $_SESSION['user_type'] = $role;
  	$_SESSION['success'] = "You are now logged in";

    if ($_SESSION['user_type'] == 'SAdmin') {
      header('location: indexadd.php');
    }

    else{
       header('location: index.php'); 
    }

  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($results))
    {
      $zonee = $row["zonee"];
      $user_type = $row["user_type"];
    }
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['zonee'] = $zonee;
      $_SESSION['user_type'] = $user_type;
      $_SESSION['success'] = "You are now logged in";
      if ($user_type == 'SAdmin') {
      header('location: indexadd.php');
      }

      else{
       header('location: index.php'); 
      }

    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
