<?php
$connect = mysqli_connect("localhost", "EALBDB", "4d9B7lAo5dTKvvUY", "project");
mysqli_query($connect,'SET CHARACTER SET utf8');
mysqli_query($connect,"SET SESSION collation_connection ='utf8_general_ci'");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
