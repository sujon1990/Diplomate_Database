<?php include 'db.php';?>

<?php
if(!empty($_POST["id"])) 
{
$query =mysqli_query($connect,"SELECT DISTINCT  designation FROM person WHERE id = '" . $_POST["id"] . "'");
?>
<option value="">Select</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row[" designation"]; ?>"><?php echo $row[" designation"]; ?></option>
<?php
}
}
?>
