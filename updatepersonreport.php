<?php include 'db.php';?>
<?php
$msg = "";
$msg_class = "";
if (isset($_POST['save_profile'])) {
    // for the database
    //  $bio = stripslashes($_POST['bio']);
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 900000) {
        $msg = "Image size should not be greated than 900Kb";
        $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
        $msg = "File already exists";
        $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
        if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO person SET profile_image='$profileImageName'";
            if(mysqli_query($connect, $sql)){
                $msg = "Image uploaded and saved in the Database";
                $msg_class = "alert-success";
            } else {
                $msg = "There was an error in the database";
                $msg_class = "alert-danger";
            }
        } else {
            $error = "There was an erro uploading the file";
            $msg = "alert-danger";
        }
    }
}
?>


<?php
date_default_timezone_set('Asia/Dhaka');
$updatedtime = date('m/d/y h:i:s a');

$id =  $_POST['id'];

if (!empty($_POST["name"])) {
    $sql =  "UPDATE project.person SET name='".$_POST['name']."',birth='".$_POST['birth']."',age='age',father='".$_POST['father']."',address='".$_POST['address']."',upzilla='".$_POST['upzilla']."',district='".$_POST['district']."',addressp='".$_POST['addressp']."',upzillap='".$_POST['upzillap']."',districtp='".$_POST['districtp']."',mobile='".$_POST['mobile']."',nid='".$_POST['nid']."',email='".$_POST['email']."',addressj='".$_POST['addressj']."',upzillaj='".$_POST['upzillaj']."',districtj='".$_POST['districtj']."',married='".$_POST['married']."',education='".$_POST['education']."',profession='".$_POST['profession']."',job='job',post='".$_POST['post']."',acceptance='".$_POST['acceptance']."',contribution='".$_POST['contribution']."',thought='".$_POST['thought']."' where id = $id ";;

    if ($connect->query($sql) === TRUE) {
        $error = '';
        echo $error;
    } else {
        $error =  "Error: " . $sql . "<br>" . $connect->error;
        echo $error;
    }
}
//echo "Connected successfully";
$sql = "SELECT * FROM project.person";
$result = $connect->query($sql);
?>

<?php include 'header.php'; ?>
<?php include 'index.php';?>


    <?php include 'footer.php';

    $connect->close();
    ?>
