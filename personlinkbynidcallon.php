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
$id =  $_GET['id'];
$sql = "SELECT * FROM project.callon where id = $id";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_array($result))
    {

        $infotype = $row["infotype"];
        $pp = $row["pp"];

        $oname = $row["oname"];
        // $age = $row["age"];

        $name = $row["name"];

        $country = $row["country"];

        $emptype = $row["emptype"];

        $designation = $row["designation"];

        $appt = $row["appt"];

        $status = $row["status"];

        $nationality = $row["nationality"];

        $nid = $row["nid"];

        $passno = $row["passno"];
        
        $remark = $row["remark"];

        $other = $row["other"];

        $callonto = $row["callonto"];
        $callondate = $row["callondate"];
        $timefrom = $row["timefrom"];
        $timeto = $row["timeto"];
        $callonadd = $row["callonadd"];
        $callonps = $row["callonps"];
        $callonup = $row["callonup"];
        $callondis = $row["callondis"];
        $callontopic = $row["callontopic"];


    }
}
else
{
    echo 'Data Not Found';
}
?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="boots/jquery.min.js"></script>
    <script src="boots/bootstrap.min.js"></script>
    <link href="boots/bootstrap.min.css" rel="stylesheet" />


<style>

    .row1{
        width: 5%;
    }
        td{
            width: 60%;
            background-color: #c8dcc8;
            vertical-align: text-top;
        }

        th{
            background-color: #dff0d8;
            width: 30%;
            vertical-align: text-top; 
            font-weight:  normal; 
            font-family: 'Arial'
        }


    </style>






</head>

<body>


        <div align="center" style="padding: 6%">
              
<div id="printableArea">
        <!DOCTYPE html>
        <html>
        <head>
            <style>

    .row1{
        width: 5%;
    }
        td{
            width: 60%;
            background-color: #c8dcc8;
            vertical-align: text-top;
        }

        th{
            background-color: #dff0d8;
            width: 38.8%;
            vertical-align: text-top; 
            font-weight:  normal; 
            font-family: 'Arial'
        }


    </style>
        </head>
        <body>
        
        </body>
        </html>
    <div id="footer">
        <h4>
            <a href="index.php"> Back | </a>
            <a href="index.php">Home</a>

        </h4>
    </div>
            <table class="table" >

                <tr>
                    <h2 align="center" > <u style="font-weight:  normal; font-family: 'Arial'" >Call On Information</u></h2>
                    <th>
                        <div align="left" >
                            <img src="<?php echo 'images/' . $pp ?>" width="150px" height="150px" alt=" Image Not Found">
                            <h1><?php echo $name;?></h1>
                            <h1><?php echo $designation;?></h1>
                        </div>
                    </th>

                    <th>
                    </th>
                    <th>
                        <div align="left">
                            <img src="<?php echo 'FLAG/' . $country.".png" ?>" width="200px" height="120px" alt=" Image Not Found">
                            <h1><?php echo $country; ?></h1> </div>
                    </th>
                </tr>
                </tr>


        <tr>
            <th align="left">1. &nbsp;  &nbsp;  &nbsp; Type of Organization</th>
            <th class = "row1"><strong>:</strong></th>
            <td ><?php echo $infotype; ?></td></tr>
        <tr>
            <th align="left">2. &nbsp;  &nbsp;  &nbsp; Name of Organization</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $oname;?></td>
        </tr>



        <tr>
            <th align="left"  >3. &nbsp;  &nbsp;  &nbsp; Country</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $country; ?></td> 
        </tr>

         
        

        <tr>
            <th  align="left"  >4. &nbsp;  &nbsp;  &nbsp; Name of Individuals</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $name;?></td>
        </tr>


        <tr>
            <th  align="left"  >5. &nbsp;  &nbsp;  &nbsp; Employee Type</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $emptype;?></td>
        </tr>


        <tr>
            <th align="left"  >6. &nbsp;  &nbsp;  &nbsp;   Designation</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $designation; ?></td>
        </tr>
        
        

        <tr>
            <th align="left"  >7. &nbsp;  &nbsp;  &nbsp; Appointment</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $appt; ?></td></tr>

       
        <tr>
            <th align="left"  >8. &nbsp;  &nbsp;  Status</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $status; ?></td></tr>




        <tr>
            <th  align="left"  >9. &nbsp;  &nbsp;  Nationality</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $nationality;?></td>
            
        </tr>

    

        <tr>
            <th align="left"  >10. &nbsp;  &nbsp;   NID/SSN</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $nid; ?></td>
        </tr> 
         

        
        <tr><th align="left"  >11. &nbsp;  &nbsp;  Passport No</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $passno; ?></td>
        </tr> 

        <tr><th align="left"  >12. &nbsp;  &nbsp;  Remark</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $remark; ?></td>
        </tr> 

        
        <tr>
            <th align="left"  >13. &nbsp; &nbsp; Call on/Visit Purpose</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $callontopic; ?></td>
        </tr>

        <tr>
            <th align="left"  >14. &nbsp;  &nbsp; Call on/Visit To</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $callonto; ?></td>
        </tr>  

        <tr>
            <th align="left"  >15. &nbsp;  &nbsp; Call on/Visit Address</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $callondate; ?></td>
        </tr> 

        <tr>
            <th align="left"  >16. &nbsp;  &nbsp; Call on/Visit Time From</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $timefrom; ?></td>
        </tr>  

        <tr>
            <th align="left"  >17. &nbsp;  &nbsp; Call on/Visit Time To</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $timeto; ?></td>
        </tr>  


        <tr>
            <th align="left"  style=" padding-left: 4%;  ">☼ Police Station</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $callonps; ?></td>
        </tr> 
        <tr>
            <th  align="left"  style=" padding-left: 4%;  ">☼ Post Code</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $callonup; ?></td>
        </tr> 

        <tr>
            <th  align="left"  style=" padding-left: 4%;  ">☼ District</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $callondis; ?></td>
        </tr> 

        <tr>
            <th align="left"  >18. &nbsp;  &nbsp;  &nbsp; Other Info (If any)</th>
            <th class = "row1"><strong>:</strong></th>
            <td><?php echo $other; ?></td>
        </tr> 
        



    </div>

    </table>
    </div>
     

    <div align="center">
        <button class="btn btn-info" onclick="printPageArea('printableArea')">Print This Page</button>
    </div>

     
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

</body>

</html>