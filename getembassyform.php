<?php
$msg = "";
$msg_class = "";
$connect = mysqli_connect("localhost", "EALBDB", "4d9B7lAo5dTKvvUY", "project");
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

<?php include 'db.php';?>

<?php
if (!empty($_POST["name"])) {
    $sql = "INSERT INTO project.embassyform (profile_image,embassy,name,sdate,location,Lroad,Lps,Lplot,phonenum,fax,email,webadd,noe,sumlocalempembassy,sumforeignempembassy,sumlocalemployee,branch,remark,other,det)
VALUES ('$profileImageName','".$_POST['embassy']."','".$_POST['name']."','".$_POST['sdate']."','".$_POST['location']."','".$_POST['Lroad']."','".$_POST['Lps']."','".$_POST['Lplot']."','".$_POST['phonenum']."','".$_POST['fax']."','".$_POST['email']."','".$_POST['webadd']."','".$_POST['noe']."','".$_POST['sumlocalempembassy']."','".$_POST['sumforeignempembassy']."','".$_POST['sumlocalemployee']."','".$_POST['branch']."','".$_POST['remark']."','".$_POST['other']."','".$_POST['det']."')";
    if ($connect->query($sql) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//echo "Connected successfully";
$sql = "SELECT * FROM project.embassyform";
$result = $connect->query($sql);
?>
  
<?php include 'header.php';?>
<?php include 'index.php';?>

    
</div>

<?php include 'footer.php';

$connect->close();
?>