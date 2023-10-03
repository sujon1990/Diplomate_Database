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
    header("location: login.php");
}
?>

<?php include 'db.php';?>

<?php
$output = '';

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);

	$query = "
	SELECT * FROM person 
	WHERE infotype = 'Honorary Consuls' AND (country LIKE '%".$search."%' or name LIKE '%".$search."%' or appt LIKE '%".$search."%' or radd LIKE '%".$search."%' or phonenum LIKE '%".$search."%' or remark LIKE '%".$search."%');
	";
    // echo $query;
}
else
{
	$query = "
	SELECT * FROM person WHERE infotype ='Honorary Consuls' ";
	// echo $query;
}



$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Country</th>
							<th>Name</th>
							<th>Appointment</th>
							<th>Address</th>
							<th>Contact Info</th>
							<th>Remarks</th>
							<th>View Details</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
	    $gt = $row["id"];
		$output .= '
			<tr>
				<td>'.$row["country"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["appt"].'</td>
				<td>'.$row["radd"].'</td>
				<td>'.$row["phonenum"].'</td>
				<td>'.$row["remark"].'</td>
				<td><a href="viewforeignembassyreport.php?id='.$row["id"].' "><input type="submit" class="btn btn-info" value="View Details"></a></td>				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm("Are you sure to delete the data?");
}
</script>
</body>
</html>