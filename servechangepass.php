 <?php

session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must login first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['zonee']);
    unset($_SESSION['id']);
    unset($_SESSION['user_type']);
    header("location: login.php");
}
?>

 <?php
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "EALBDB", "4d9B7lAo5dTKvvUY", "project");
mysqli_query($db,'SET CHARACTER SET utf8');
mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");

// REGISTER USER
if (isset($_POST['reg_userpasschng'])) {
  // receive all input values from the form
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query2 = "UPDATE project.users SET password = '".$password."' where username = '".$_SESSION['username']."' ";;
  	mysqli_query($db, $query2);
    
    if ($_SESSION['user_type'] == 'SAdmin') {
      header('location: indexadd.php');
    }

    else{
       header('location: index.php'); 
    }

  }

?>

