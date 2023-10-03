<?php include 'db.php';?>
<?php
if(!empty($_POST["state_id"])) 
{
$query =mysqli_query($connect,"SELECT * FROM upazilas WHERE district_id = '" . $_POST["state_id"] . "'");
?>
<option value="">উপজেলা নির্বাচন করুন</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["bn_name"]; ?>"><?php echo $row["bn_name"]; ?></option>
<?php
}
}
?>
