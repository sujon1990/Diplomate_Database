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
$sql = "SELECT * FROM project.person where id = $id";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_array($result))
    {

        $infotype = $row["infotype"];
        $pp = $row["profile_image"];

        $oname = $row["oname"];
        // $age = $row["age"];

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
        $nid = $row["nid"];

        $pob = $row["pob"];

        $religion = $row["religion"];

        $bdentry = $row["bdentry"];

        $passno = $row["passno"];
        $passtype = $row["passtype"];
        // $location = $row["location"];
        // $Lplot = $row["Lplot"];
        // $Lroad = $row["Lroad"];
        // $Lps = $row["Lps"];

        $Oadd = $row["Oadd"];
        $Oplot = $row["Oplot"];
        $Oroad = $row["Oroad"];
        $Ops = $row["Ops"];

        $radd =  $row["radd"];
        $Rplot = $row["Rplot"];
        $Rroad = $row["Rroad"];
        $Rps =   $row["Rps"];

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


        $spskills = $row["spskills"];
        $Intelligence = $row["Intelligence"];
        $remark = $row["remark"];

        $other = $row["other"];
        $submit = $row["submit"];
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
            <div id="footer">
                <h4>
                    <a href="index.php"> Back | </a>
                    <a href="index.php">Home</a>

                </h4>
            </div>
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



            <table class="table" >

        <tr>
            <h2 align="center" > <u style="font-weight:  normal; font-family: 'Arial'" >Personal Information</u></h2>
            <th style="width: 2%">
               <div align="center" >
                <img src="<?php echo 'images/' . $pp ?>" width="150px" height="150px" alt=" Image Not Found">
                   <h1><?php echo $name;?></h1>
                   <h1><?php echo $designation;?></h1>
               </div>
            </th>

            <th style="width: 2%">
            </th>
            <th style="width: 2%">
               <div align="center">
                <img src="<?php echo 'FLAG/' . $country.".png" ?>" width="200px" height="120px" alt=" Image Not Found">
                <h1><?php echo $country; ?></h1>
               </div>
            </th>
        </tr>
        </tr>    
        <tr>
            <th align="left">1. &nbsp;  &nbsp;  &nbsp; Type of Organization</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td ><?php echo $infotype; ?></td></tr>
        <tr>
            <th align="left">2. &nbsp;  &nbsp;  &nbsp; Name of Organization</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $oname;?></td>
        </tr>



        <tr>
            <th align="left"  >3. &nbsp;  &nbsp;  &nbsp; Country</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $country; ?></td>
        </tr>




        <tr>
            <th  align="left"  >4. &nbsp;  &nbsp;  &nbsp; Name of Individuals</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $name;?></td>
        </tr>


        <tr>
            <th  align="left"  >5. &nbsp;  &nbsp;  &nbsp; Employee Type</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $emptype;?></td>
        </tr>


        <tr>
            <th align="left"  >6. &nbsp;  &nbsp;  &nbsp;   Designation</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $designation; ?></td>
        </tr>



        <tr>
            <th align="left"  >7. &nbsp;  &nbsp;  &nbsp; Date of Assuming Appointment</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $dateapp;?></td>
        </tr>

        <tr>
            <th align="left"  >8. &nbsp;  &nbsp;  &nbsp; Appointment</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $appt; ?></td></tr>

        <tr>
            <th align="left"  >9. &nbsp;  &nbsp;  &nbsp; BD Entry Date</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $bdentry; ?></td></tr>
        <tr>
            <th align="left"  >10. &nbsp;  &nbsp;   Departure Date</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $dep; ?></td></tr>

        <tr>
            <th align="left"  >11. &nbsp;  &nbsp;  Status</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $status; ?></td></tr>




        <tr>
            <th  align="left"  >12. &nbsp;  &nbsp;  Nationality</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $nationality;?></td>

        </tr>



        <tr>
            <th align="left"  >13. &nbsp;  &nbsp;   NID/SSN</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $nid; ?></td>
        </tr>
         <tr>
            <th align="left"  >14. &nbsp;  &nbsp; Date of Birth</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $dob; ?></td>
        </tr>


        <tr>
            <th align="left"  >15. &nbsp;  &nbsp;  Place of Birth</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $pob; ?></td>
        </tr>
        <tr>
            <th align="left"  >16. &nbsp;  &nbsp;  Religion</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $religion; ?></td>
        </tr>


        <tr><th align="left"  >17. &nbsp;  &nbsp;  Passport No</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $passno; ?></td>
        </tr>
        <tr>
            <th align="left"  >18. &nbsp;  &nbsp;  Passport Type</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $passtype; ?></td>
        </tr>

        <tr>
            <th align="left"  >20. &nbsp;  &nbsp; Office Address</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Oadd; ?></td>
        </tr>

        <tr>
            <th  align="left"  style=" padding-left: 4%;  ">☼ District</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Oplot; ?></td>
        </tr>
        <tr>
            <th align="left"  style=" padding-left: 4%;  ">☼ Police Station</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Oroad; ?></td>
        </tr>
        <tr>
            <th  align="left"  style=" padding-left: 4%;  ">☼ Post Code</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Ops; ?></td>
        </tr>

        <tr>
            <th align="left"  >21. &nbsp;  &nbsp;  Residence Address</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $radd; ?></td>
        </tr>

        <tr>
            <th align="left"  style=" padding-left: 4%;" >☼ District</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Rplot; ?></td>
        </tr>
        <tr>
            <th align="left"  style=" padding-left: 4%;" >☼ Police Station</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Rroad; ?></td>
        </tr>
        <tr>
            <th   align="left"  style=" padding-left: 4%;">☼ Post Code</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Rps; ?></td>
        </tr>

        <tr>
            <th align="left">22. &nbsp;  &nbsp;  Contact Details</th>
            <th class ="row1"></th>
            <td></td>
        </tr>
        <tr>
            <th align="left"  style=" padding-left: 4%;">☼ Phone Number</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $phonenum; ?></td></tr>
        <tr>
            <th align="left"  style=" padding-left: 4%;">☼ Fax Number</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $fax; ?></td>
        </tr>
        <tr>
            <th  align="left"  style=" padding-left: 4%;">☼ E-mail</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th align="left"  style=" padding-left: 4%;">☼ Web Address</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $webadd; ?></td>
        </tr>


        <tr>
            <th align="left"  >23. &nbsp;  &nbsp;  Family Information</th>
            <th class="row1"></th>
            <td></td>
        </tr>

         <?php
        if (!empty($spouse)) {

            echo '
            <tr>
                <th style=" padding-left: 52px;  ">(a) Name</th>
                <th style="width: 2%"><strong>:</strong></th>
                <td> '.$spouse.'</td>
            </tr>

            <tr>
                <th style=" padding-left: 75px;  "> Passport Number</th>
                <th style="width: 2%"><strong>:</strong></th>
                <td> '.$kids.'</td>
            </tr>

            <tr>
                <th style=" padding-left: 75px;  "> Relationship</th>
                <th style="width: 2%"><strong>:</strong></th>
                <td> '.$relation.'</td>
            </tr>

            ';
        }

        if (!empty($spouse2)) {

            echo '
                <tr>
                    <th style=" padding-left: 52px;  ">(b) Name</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$spouse2.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Passport Number</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$kids2.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Relationship</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$relation2.'</td>
                </tr>
            ';

        }

         if (!empty($spouse3)) {
            echo '
                <tr>
                    <th style=" padding-left: 52px;  ">(c) Name</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$spouse3.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Passport Number</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$kids3.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Relationship</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$relation3.'</td>
                </tr>
            ';

        }

         if (!empty($spouse4)) {
            echo '
                <tr>
                    <th style=" padding-left: 52px;  ">(d) Name</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$spouse4.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Passport Number</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$kids4.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Relationship</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$relation4.'</td>
                </tr>
            ';

        }

        if (!empty($spouse5)) {
            echo '
                <tr>
                    <th style=" padding-left: 52px;  ">(e) Name</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$spouse5.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Passport Number</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$kids5.'</td>
                </tr>

                <tr>
                    <th style=" padding-left: 75px;  "> Relationship</th>
                    <th style="width: 2%"><strong>:</strong></th>
                    <td> '.$relation5.'</td>
                </tr>
            ';

        }




        ?>


        <tr>
            <th align="left"  >24. &nbsp;  &nbsp;  &nbsp; Educational Qualification</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $edu; ?></td>
        </tr>
        <tr>
            <th align="left"  >25. &nbsp;  &nbsp;  &nbsp; Experience/Previous Posting</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $exp; ?></td>
        </tr>
        <tr>
            <th align="left"  >26. &nbsp;  &nbsp;  &nbsp; Hobby</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $hobby; ?></td>
        </tr>

        <tr>
            <th align="left"  >27. &nbsp;  &nbsp;  &nbsp; Special Skills</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $spskills; ?></td>
        </tr>
        <tr>
            <th align="left"  >28. &nbsp;  &nbsp;  &nbsp; Intelligence Background</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $Intelligence; ?></td>
        </tr>
        <tr>
            <th align="left"  >29. &nbsp;  &nbsp;  &nbsp; Remarks</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $remark; ?></td>
        </tr>
        <tr>
            <th align="left"  >30. &nbsp;  &nbsp;  &nbsp; Other Info (If any)</th>
            <th style="width: 2%"><strong>:</strong></th>
            <td><?php echo $other; ?></td>
        </tr> 
        <tr>
            <th align="left"  > </th>
            <th class="row1"></th>
            <td align="right"><small>Prepared by: <?php echo $submit; ?></small></td></tr> 



    </div>

    </table>
    </div>
     

    <div align="center">
        <button class="btn btn-info" onclick="printPageArea('printableArea')">Print This Page</button>
         <?php
        if ($status == 'Dependent') {

            if ($_SESSION['user_type']=='SAdmin') {
                echo '
            <a href="updateforeignembassyreportformdep.php?id='.$id.'" >
            <input type="submit" class="btn btn-warning" value="Update">
            </a>
            <a href="deleteforeignembassyreport.php?id='.$id.'" class="btn btn-danger" onclick="return checkDelete()">
                Delete
            </a>';
            }
            
        }

        else {

            if ($_SESSION['user_type']=='SAdmin') {
                           echo '
                <a href="updateforeignembassyreportform.php?id='.$id.' " >
        <input type="submit" class="btn btn-warning" value="Update">
        </a>
        <a href="deleteforeignembassyreport.php?id='.$id.'" class="btn btn-danger" onclick="return checkDelete()">
            Delete
        </a>
            ';
            }


        }

        ?>
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

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm("Are you sure to delete the data?");
}
</script>



</body>

</html>