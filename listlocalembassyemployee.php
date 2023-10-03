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

$coun =  $_GET['country'];

?>


<?php include 'footer.php';?>

<?php include 'header.php';?>

<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="boots/district.min.js"></script>

    <style>
        #listview{
            font-family: 'Arial';
            border-collapse: collapse;
            width: 100%;
        }
        #listview td, #listview th {
            border: 1px solid #ddd; padding: 8px; vertical-align: top;

        }

        #listview tr:nth-child(even){background-color: #f2f2f2;}

        #listview tr:hover {background-color: #ddd;}

        #listview th {
            padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #4CAF50; color: white;
        }
    </style>

</head>



<div class="container">
    <br />
    <br />


    <div align="center" class="table-responsive" id="printableArea">
        <h2 align="center">List of Local Employee - <?php echo $coun; ?> </h2><br />
        <table  class="table table bordered" id="listview" style="text-align: center;" >

            <tr>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Name</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Designation</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Status</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Mobile NO</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">National ID Number</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Date of Joining</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Remarks</th>
            </tr>
     
<?php include 'db.php';?>   
<?php
$coun =  $_GET['country'];
$sql = "SELECT * FROM project.person WHERE infotype = 'Embassy' AND emptype = 'Local' AND dep=' ' AND country = '".$coun."'  ";

 $result = mysqli_query($connect, $sql);
 global $flagDeplomat;
 global $flagNonDeplomat;
 global $flagDependent;
 global $totalstaff;
 global $totalPerson;


 $flagDeplomat= 0;
 $flagNonDeplomat= 0;
 $flagDependent= 0;
 $totalPerson= 0;

if(mysqli_num_rows($result) > 0)
{
    
    while($row = mysqli_fetch_array($result))
    {


        $id = $row["id"];
        $name =  $row["name"];
        $designation = $row["designation"];
        $status = $row["status"];
        $dateapp = $row["dateapp"];
        $nid = $row["nid"];
        $phonenum = $row["phonenum"];
        $remark = $row["remark"];

        if ($status=="Dependent") {
            $flagDependent++;
        }

        if ($status == "Diplomat") {
            $flagDeplomat++;
        }

        if ($status == "Non Diplomat") {
            $flagNonDeplomat++;
        }

        $totalPerson++;
        $totalstaff = $flagDeplomat + $flagNonDeplomat; 
        


        echo '<tr> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;"><a style="text-decoration: none; color: blue" href="personlinkbynid.php?id='.$id.'">'.$name.'</a></td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$designation.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$status.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$phonenum.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$nid.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$dateapp.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$remark.'</td>
              </tr>';

    }

    }
    else
    {
        echo 'Data Not Found';
    }   
         
        ?>
        </table>

    <b><h4 style="text-align: left">Number of Diplomat : <?php echo $flagDeplomat; ?></h4></b>
    <b><h4 style="text-align: left">Number of Non Diplomat : <?php echo $flagNonDeplomat; ?></h4></b>
    <b><h4 style="text-align: left">Number of Dependent : <?php echo $flagDependent; ?></h4></b>
    <b><h4 style="text-align: left">Total Staff : <?php echo $totalstaff; ?></h4></b>
    <b><h4 style="text-align: left">Total Person : <?php echo $totalPerson; ?></h4></b>
    </div>

    <br>
    <div align="center">
        <button class="btn btn-info" onclick= history.back()>BACK</button>
        <button class="btn btn-info" onclick="printPageArea('printableArea')">Print This Page</button>
    </div>
    
    <br />
    <div id="result"></div>
</div>
<div style="clear:both"></div>

<script type="text/javascript">
    function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open();
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}

</script>
<br />

<br />
<br />
<br />
</html>




