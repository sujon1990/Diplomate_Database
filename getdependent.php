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
    //Upload image only if no errors
    if (empty($error)) {
        if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO dependent SET profile_image='$profileImageName'";
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
    $sql = "INSERT INTO project.person (profile_image,infotype,oname,country,name,emptype,designation,dep,dateapp,appt,status,nationality,nid,dob,pob,religion,bdentry,passno,passtype,Oadd,Oplot,Oroad,Ops,radd,Rplot,Rroad,Rps,phonenum,fax,email,webadd,depname,relationdep,deppass,edu,exp,hobby,spskills,Intelligence,remark,other,submit)
VALUES ('$profileImageName','".$_POST['infotype']."','".$_POST['oname']."','".$_POST['country']."','".$_POST['name']."','".$_POST['emptype']."','".$_POST['designation']."','".$_POST['dep']."','".$_POST['dateapp']."','".$_POST['appt']."','Dependent','".$_POST['nationality']."','".$_POST['nid']."','".$_POST['dob']."','".$_POST['pob']."','".$_POST['religion']."','".$_POST['bdentry']."','".$_POST['passno']."','".$_POST['passtype']."','".$_POST['Oadd']."','".$_POST['Oplot']."','".$_POST['Oroad']."','".$_POST['Ops']."','".$_POST['radd']."','".$_POST['Rplot']."','".$_POST['Rroad']."','".$_POST['Rps']."','".$_POST['phonenum']."','".$_POST['fax']."','".$_POST['email']."','".$_POST['webadd']."','".$_POST['depname']."','".$_POST['relationdep']."','".$_POST['deppass']."','".$_POST['edu']."','".$_POST['exp']."','".$_POST['hobby']."','".$_POST['spskills']."','".$_POST['Intelligence']."','".$_POST['remark']."','".$_POST['other']."','".$_POST['det']."')";
    if ($connect->query($sql) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//echo "Connected successfully";
$sql = "SELECT * FROM project.person";
$result = $connect->query($sql);
?>
  
<?php include 'header.php';?>
<?php include 'index.php';?>

    
</div>

<?php include 'footer.php';

$connect->close();
?>