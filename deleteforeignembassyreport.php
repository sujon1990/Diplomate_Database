

<?php include 'db.php';?>
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
<?php
$id =  $_GET['id'];
$sql2 = "SELECT * FROM project.person where id = $id";
$result = mysqli_query($connect, $sql2);


if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_array($result))
    {

        
        $infotype = $row["infotype"];
        $pp = $row["profile_image"];

        $oname = $row["oname"];
        $name = $row["name"];

        $country = $row["country"];

        $emptype = $row["emptype"];

        $designation = $row["designation"];



        $dep = $row["dep"];

        $dateapp = $row["dateapp"];

        $appt = $row["appt"];




        $status = $row["status"];

        $nationality = $row["nationality"];

        $nid = $row["nid"];




        $dob = $row["dob"];

        $pob = $row["pob"];

        $religion = $row["religion"];

        $bdentry = $row["bdentry"];
        $passno = $row["passno"];
        $passtype = $row["passtype"];

        $Oadd = $row["Oadd"];
        $Oplot = $row["Oplot"];
        $Oroad = $row["Oroad"];
        $Ops = $row["Ops"];
        $radd = $row["radd"];
        $Rplot = $row["Rplot"];
        $Rroad = $row["Rroad"];
        $Rps = $row["Rps"];
        $phonenum = $row["phonenum"];

        $fax = $row["fax"];
        $email = $row["email"];

        $webadd = $row["webadd"];

        $spouse = $row["spouse"];
        $kids = $row["kids"];
        $relation = $row["relation"];
        $spouse2 = $row["spouse2"];
        $kids2 = $row["kids2"];
        $relation2 = $row["relation2"];
        $spouse3 = $row["spouse3"];
        $kids3 = $row["kids3"];
        $relation3 = $row["relation3"];
        $spouse4 = $row["spouse4"];
        $kids4 = $row["kids4"];
        $relation4 = $row["relation4"];
        $spouse5 = $row["spouse5"];
        $kids5 = $row["kids5"];
        $relation5 = $row["relation5"];

        $depname = $row["depname"];
        $deppass = $row["deppass"];

        $edu = $row["edu"];
        $exp = $row["exp"];
        $hobby = $row["hobby"];
        $relationdep = $row["relationdep"];

        $spskills = $row["spskills"];
        $Intelligence = $row["Intelligence"];
        $remark = $row["remark"];

        $other = $row["other"];
        $submit = $row["submit"];

        $createdtime = $row["createdtime"];
        $updatedtime = $row["updatedtime"];
        $updatedby = $row["updatedby"];

    }

}
else
{
    echo 'Data Not Found';
}

date_default_timezone_set('Asia/Dhaka');
$deletedtime = date('m/d/y h:i:s a');
$deletedby = $_SESSION['username'];

if (!empty($infotype)) {
    $sql3 = "INSERT INTO project.deleteddata(profile_image,infotype,oname,country,name,emptype,designation,dep,dateapp,appt,status,nationality,nid,dob,pob,religion,bdentry,passno,passtype,Oadd,Oplot,Oroad,Ops,radd,Rplot,Rroad,Rps,phonenum,fax,email,webadd,spouse,kids,relation,spouse2,kids2,relation2,spouse3,kids3,relation3,spouse4,kids4,relation4,spouse5,kids5,relation5,depname,deppass,edu,exp,hobby,spskills,Intelligence,remark,other,submit,createdtime,updatedby,updatedtime,deletedby,deletedtime)
VALUES ('".$pp."','".$infotype."','".$oname."','".$country."','".$name."','".$emptype."','".$designation."','".$dep."','".$dateapp."','".$appt."','".$status."','".$nationality."','".$nid."','".$dob."','".$pob."','".$religion."','".$bdentry."','".$passno."','".$passtype."','".$Oadd."','".$Oplot."','".$Oroad."','".$Ops."','".$radd."','".$Rplot."','".$Rroad."','".$Rps."','".$phonenum."','".$fax."','".$email."','".$webadd."','".$spouse."','".$kids."','".$relation."','".$spouse2."','".$kids2."','".$relation2."','".$spouse3."','".$kids3."','".$relation3."','".$spouse4."','".$kids4."','".$relation4."','".$spouse5."','".$kids5."','".$relation5."','','','".$edu."','".$exp."','".$hobby."','".$spskills."','".$Intelligence."','".$remark."','".$other."','".$submit."','".$createdtime."','".$updatedby."','".$updatedtime."','".$deletedby."','".$deletedtime."')";

    $res =mysqli_query($connect, $sql3);

    $sql = "DELETE FROM project.person where id = $id";
	$resul = mysqli_query($connect, $sql);

}

?>




<?php include 'header.php'; ?>
<div id="main">
            <div align="center" style="color: black">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                        <?php
                        unset($_SESSION['success']);
                        ?>
                </div>
            <?php endif ?>
            <div style="background-color: #722B90">
            <!-- logged in user information -->

            <div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 10px; background-color: #722B90; padding: 10px;}">
                <?php  if (isset($_SESSION['username']) && ($_SESSION['zonee']) ) : ?>
                    <div style="text-align: center;padding: 20px 0; font-size: 30px;">
                            
                         &nbsp &nbsp &nbsp &nbsp &nbsp
                    </div>

                        <div style="text-align: center;padding: 20px 0; font-size: 30px;">
                            <h1>
                                <strong style="color: #FCD963;">
                                    Welcome to</br> 
                                    EAB Personnel Database of Embassy/HC/Intl Org
                                <strong>
                            </h1>
                        </div>
                        <div style="text-align: center;padding: 67px 0; font-size: 16px;" >
                            User: 
                            <strong>
                                <?php echo $_SESSION['username']; ?>  
                            
                            | &nbsp |
                                
                            <a href="changepass.php" style="color:  #FCD963;">
                                Change Password
                            </a>

                            | &nbsp |

                            <a href="index.php?logout='1'" style="color:  #FCD963;">
                                Logout
                            </a>    
                            </strong>
                        </div>
                    </div>
                <?php endif ?>
            </div>
            <br>
                <img src="img/Picture1.png" height="225px" width="225px">
            </div>



    <div style="width: 100%;font-family: 'Cambria', sans-serif;font-size: 90%;height: 28px;padding: 20px 0 5px 0;text-align: center; background: transparent;color: black ;text-transform: uppercase; letter-spacing: 0.1em;}">

        <h4 class="footer" >
            
            <?php
                if ($_SESSION['user_type']=='SAdmin') {
                    echo '<a href="index.php" style="color: black;">Home |</a>
            <a href="register.php" style="color: black;">Add User |</a>
            <a href="dataentry.php" style="color: black;">Data Entry |</a>
            <a href="report.php" style="color: black;">Reports |</a>
            <a href="multilocalembassyemployee.php"style="color: black;">Multi-level Search |</a>
            <a href="multicallon.php" style="color: black;">Call On/Visit Info |</a>
            <a href="deleteddata.php" style="color: black;">Deleted Data |</a>
            <a href="backupdata.php" style="color: black;">Backup Data </a>';
                }

                else{
                    echo'
                    <a href="index.php" style="color: black;">Home |</a>
                    <a href="dataentry.php" style="color: black;">Data Entry |</a>
                    <a href="report.php" style="color: black;">Reports |</a>
                    <a href="multilocalembassyemployee.php"style="color: black;">Multi-level Search |</a>
                    <a href="multicallon.php" style="color: black;">Call On/Visit Info </a>';
                }
             ?>

            
        </h4>

    </div>


<?php include 'footer.php';?>

<?php

$connect->close();
?>
