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
    $sql =  "UPDATE project.person SET infotype='".$_POST['infotype']."',oname='".$_POST['oname']."',country='".$_POST['country']."',name='".$_POST['name']."',emptype='".$_POST['emptype']."',designation='".$_POST['designation']."',dep='".$_POST['dep']."',dateapp='".$_POST['dateapp']."',appt='".$_POST['appt']."',status='".$_POST['status']."',nationality='".$_POST['nationality']."',nid='".$_POST['nid']."',dob='".$_POST['dob']."',pob='".$_POST['pob']."',religion='".$_POST['religion']."',bdentry='".$_POST['bdentry']."',passno='".$_POST['passno']."',passtype='".$_POST['passtype']."',Oadd='".$_POST['Oadd']."',Oplot='".$_POST['Oplot']."',Oroad='".$_POST['Oroad']."',Ops='".$_POST['Ops']."',radd='".$_POST['radd']."',Rplot='".$_POST['Rplot']."',Rroad='".$_POST['Rroad']."',Rps='".$_POST['Rps']."',phonenum='".$_POST['phonenum']."',fax='".$_POST['fax']."',email='".$_POST['email']."',webadd='".$_POST['webadd']."',depname='".$_POST['depname']."',deppass='".$_POST['deppass']."',spouse='".$_POST['spouse']."',kids='".$_POST['kids']."',relation='".$_POST['relation']."',spouse2='".$_POST['spouse2']."',kids2='".$_POST['kids2']."',relation2='".$_POST['relation2']."',spouse3='".$_POST['spouse3']."',kids3='".$_POST['kids3']."',relation3='".$_POST['relation3']."',spouse4='".$_POST['spouse4']."',kids4='".$_POST['kids4']."',relation4='".$_POST['relation4']."',spouse5='".$_POST['spouse5']."',kids5='".$_POST['kids5']."',relation5='".$_POST['relation5']."',edu='".$_POST['edu']."',exp='".$_POST['exp']."',hobby ='".$_POST['hobby']."',spskills='".$_POST['spskills']."',Intelligence='".$_POST['Intelligence']."',remark='".$_POST['remark']."',other='".$_POST['other']."',updatedby='".$_POST['det']."', updatedtime='".$updatedtime."' where id = $id ";;

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
