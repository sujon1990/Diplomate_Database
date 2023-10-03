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
    	<h2 align="center">List of Individuals</h2><br />
        <table  class="table table bordered" id="listview" style="text-align: center;" >

        	<tr>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Organization Type</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Country</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Name</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Designation</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Status</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Date of Birth</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">BD Entry Date</th>
        		<!-- <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Departure Date</th> -->
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Passport No</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Passport Type</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Residence Address</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Remarks</th>
        	</tr>
   		
<?php

$output="";
if(isset($_POST["infotype"]) && $_POST["infotype"]!= '')
{
	$query = " SELECT * FROM project.person WHERE infotype= '".$_POST["infotype"]."' ";

    if (isset($_POST["oname"]) && $_POST["oname"]!= '') {
        $query .= "AND oname = '".$_POST["oname"]."' ";
    }

    if (isset($_POST["emptype"]) && $_POST["emptype"]!= '') {
        $query .= "AND emptype = '".$_POST["emptype"]."' ";
    }

    if (isset($_POST["passno"]) && $_POST["passno"]!= '') {
        $query .= "AND passno = '".$_POST["passno"]."' ";
    }

    if (isset($_POST["nid"]) && $_POST["nid"]!= '') {
        $query .= "AND nid = '".$_POST["nid"]."' ";
    }

	if (isset($_POST["country"]) && $_POST["country"]!= '') {
		$query .= "AND country = '".$_POST["country"]."' ";
	}

	if (isset($_POST["status"]) && $_POST["status"]!= '') {
		$query .= " AND status = '".$_POST["status"]."' ";
	}

	if (isset($_POST["designation"]) && $_POST["designation"]!= '') {
		$query .= " AND designation = '".$_POST["designation"]."' ";
	}

    if (isset($_POST["religion"]) && $_POST["religion"]!= '') {
        $query .= " AND religion = '".$_POST["religion"]."' ";
    }

    if (isset($_POST["bdentryfrom"]) && isset($_POST["bdentryfrom"]) && $_POST["bdentryto"]!= '' && $_POST["bdentryto"]!= '') {
         $query .= "AND bdentry BETWEEN '".$_POST["bdentryfrom"]."' AND '".$_POST["bdentryto"]."' ";
    }

    if (isset($_POST["depdatefrom"]) && isset($_POST["depdatefrom"]) && $_POST["depdateto"]!= '' && $_POST["depdateto"]!= '') {
         $query .= "AND dep BETWEEN '".$_POST["depdatefrom"]."' AND '".$_POST["depdateto"]."' ";
    }

    if (isset($_POST["apdatefrom"]) && isset($_POST["apdatefrom"]) && $_POST["apdateto"]!= '' && $_POST["apdateto"]!= '') {
         $query .= "AND dep BETWEEN '".$_POST["apdatefrom"]."' AND '".$_POST["apdateto"]."' ";
    }



	$result = mysqli_query($connect, $query);
	$rowcount=mysqli_num_rows($result);

	if ($rowcount > 0) {
		foreach ($result as $row) {
			$output .= '
            <tr>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['oname'].'</td>
				<td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['country'].'</td>
                <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;"><a style="text-decoration: none; color: blue" href="personlinkbynid.php?id='.$row["id"].'">'.$row['name'].'</a></td> 
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['designation'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['status'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['dob'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['bdentry'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['passno'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['passtype'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['radd'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['remark'].'</td>
			</tr> 
            ';
		}
	}

	else
	{
		$output = 'Data Not Found';
	}

	echo $output;
}
         
    	?>
 		</table>
    </div>

    <br>
    <div align="center">
        <button class="btn btn-info" onclick= "location.href='index.php';">BACK</button>
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






