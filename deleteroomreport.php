<?php include 'db.php';?>
<?php
$id =  $_GET['id'];
$sql = "DELETE FROM project.room where id = $id";
$result = mysqli_query($connect, $sql);

?>

<?php include 'header.php';?>
<?php include 'index.php';?>
<?php include 'footer.php';

$connect->close();
?>

