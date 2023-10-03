
<?php include 'db.php';?>
<?php
$passno =  ($_POST["passno"]);
$nid =  ($_POST["nid"]);





if (!empty(($_POST["passno"]))) {
    $sql4 = "SELECT * FROM project.person where passno = '".$passno."' ";
}

if (!empty(($_POST["nid"]))) {
    $sql4 = "SELECT * FROM project.person where nid = '".$nid."' ";
}

if (!empty(($_POST["passno"])) && !empty(($_POST["nid"]))) {
    $sql4 = "SELECT * FROM project.person where passno = '".$passno."' or nid = '".$nid."' ";
}

$result4 = mysqli_query($connect, $sql4);


if(mysqli_num_rows($result4) > 0)
{

    while($row = mysqli_fetch_array($result4))
    {

        $pp = $row["profile_image"];
        $infotype = $row["infotype"];
        $oname = $row["oname"];
        $country = $row["country"];
        $name = $row["name"];
        $emptype = $row["emptype"];
        $designation = $row["designation"];
        $appt = $row["appt"];
        $status = $row["status"];
        $nationality = $row["nationality"];
        $remark = $row["remark"];
        $nidx = $row["nid"];
        $passnox = $row["passno"];
    }


}
else
{
    echo 'Data Not Found';
}


if (!empty($_POST["passno"])) {
    $sql = "INSERT INTO project.callon(pp,infotype,oname,country,name,emptype,designation,appt,status,nationality,nid,passno,remark,callonto,callondate,timefrom,timeto,callonadd,callonps,callonup,callondis,callontopic,other)
VALUES ('".$pp."','".$infotype."','".$oname."','".$country."','".$name."','".$emptype."','".$designation."','".$appt."','".$status."','".$nationality."','".$nidx."','".$passnox."','".$remark."','".$_POST['callonto']."','".$_POST['callondate']."','".$_POST['timefrom']."','".$_POST['timeto']."','".$_POST['callonadd']."','".$_POST['callonps']."','".$_POST['callonup']."','".$_POST['callondis']."','".$_POST['callontopic']."','".$_POST['other']."')";
    
if ($connect->query($sql) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
else
{
    echo "The Passport numbuer has not matched with the existing Person's Data";
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