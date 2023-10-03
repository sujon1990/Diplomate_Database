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
        <h2 align="center">List of Honorary Consuls- <?php echo $coun; ?> </h2><br />
        <table  class="table table bordered" id="listview" style="text-align: center;" >

            <tr>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Country</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Name</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Appointment</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Status</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Dependent On</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Relation with employee</th>
                <!-- <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Passport No of the person to whom dependent to</th> -->
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Address</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Contact Info</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Remarks</th>
            </tr>

<?php include 'db.php';?>        
<?php
$coun =  $_GET['country'];
$sql = "SELECT * FROM project.person WHERE infotype = 'Honorary Consuls' AND dep=' ' ORDER BY deppass ASC ";

 $result = mysqli_query($connect, $sql);
 global $flagDeplomat;
 global $flagNonDeplomat;
 global $totalstaff;
 global $totalPerson;
 global $flagSpouse;
 global $flagSpouse2;
 global $flagSpouse3;
 global $flagSpouse4;
 global $flagSpouse5;
 global $total;
 global $flagDependent;


 $flagDeplomat= 0;
 $flagNonDeplomat= 0;
 $flagSpouse= 0;
 $flagSpouse2= 0;
 $flagSpouse3= 0;
 $flagSpouse4= 0;
 $flagSpouse5= 0;
 $totalPerson= 0;
if(mysqli_num_rows($result) > 0)
{
    
    while($row = mysqli_fetch_array($result))
    {


        $id = $row["id"];
        $country = $row["country"];
        $name =  $row["name"];
        $appt = $row["appt"];
        $relationdep = $row["relationdep"];
        $depname = $row["depname"];
        $status = $row["status"];
        $deppass = $row["deppass"]; 
        $radd = $row["radd"];
        $phonenum = $row["phonenum"];
        $remark = $row["remark"];

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




        echo '<tr> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;"><a style="text-decoration: none; color: blue" href="personlinkbynid.php?id='.$id.'">'.$name.'</a></td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$appt.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$status.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$depname.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$relationdep.'</td>
                  <!-- <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$deppass.'</td>-->    
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$radd.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$phonenum.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$remark.'</td>
              </tr>';


        if (!empty($spouse)) {
                  $flagSpouse++;  
                  echo
                  '
                  <tr>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$spouse.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Dependent</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$name.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$relation.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>       
                  
                  </tr>
                  ';
              }      

        if (!empty($spouse2)) {
                  $flagSpouse2++;  
                  echo
                  '
                 <tr>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$spouse2.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Dependent</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$name.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$relation2.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>       
                  
                  </tr>
                  ';
              } 

        if (!empty($spouse3)) {
                  $flagSpouse3++;  
                  echo
                  '
                 <tr>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$spouse3.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Dependent</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$name.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$relation3.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>       
                  
                  </tr>
                  ';
              } 

        if (!empty($spouse4)) {
                  $flagSpouse4++;  
                  echo
                  '
                 <tr>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$spouse4.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Dependent</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$name.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$relation4.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>       
                  
                  </tr>
                  ';
              } 

        if (!empty($spouse5)) {
                  $flagSpouse5++;  
                  echo
                  '
                  <tr>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$spouse5.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Dependent</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$name.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$relation5.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">     </td>       
                  
                  </tr>
                  ';
              }       




       
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
        $total = $totalPerson+$flagSpouse+$flagSpouse2+$flagSpouse3+$flagSpouse4+$flagSpouse5;
        $flagDependent = $flagSpouse+$flagSpouse2+$flagSpouse3+$flagSpouse4+$flagSpouse5;          

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
    <b><h4 style="text-align: left">Total Person : <?php echo $total; ?></h4></b>
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




