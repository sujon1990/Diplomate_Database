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
    	<h2 align="center">List of Call On/ Visit</h2><br />
        <table  class="table table bordered" id="listview" style="text-align: center;" >

        	<tr>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Organization Type</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Organization Name</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Name</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Individual Passport No</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Country</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Designation</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Status</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Call On/ Visit Topic</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Call On/ Visit To</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Call On/ Visit Date</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Call On/ Visit Address</th>
        	</tr>
   		
<?php

$output="";
if(isset($_POST["infotype"]))
{

	$query = " SELECT * FROM project.callon WHERE infotype= '".$_POST["infotype"]."' ";

	if (isset($_POST["oname"]) && $_POST["oname"]!= '') {
		$query .= "AND oname = '".$_POST["oname"]."' ";
	}

	if (isset($_POST["emptype"]) && $_POST["emptype"]!= '') {
		$query .= "AND emptype = '".$_POST["emptype"]."' ";
	}

	if (isset($_POST["callonto"]) && $_POST["callonto"]!= '') {
		$query .= "AND callonto = '".$_POST["callonto"]."' ";
	}

	if (isset($_POST["callontopic"]) && $_POST["callontopic"]!= '') {
		$query .= "AND callontopic = '".$_POST["callontopic"]."' ";
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

	if (isset($_POST["callonfromd"]) && isset($_POST["callontod"]) && $_POST["callonfromd"]!= '' && $_POST["callontod"]!= '') {
		 $query .= "AND callondate BETWEEN '".$_POST["callonfromd"]."' AND '".$_POST["callontod"]."' ";
	}

	if (isset($_POST["designation"]) && $_POST["designation"]!= '' ) {
		$query .= " AND designation = '".$_POST["designation"]."' ";
	}



	$result = mysqli_query($connect, $query);
	$rowcount=mysqli_num_rows($result);

    global $flagCallon;
    $flagCallon = 0;

	if ($rowcount > 0) {
		foreach ($result as $row) {
			$output .= '
            <tr>
            	<td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['infotype'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['oname'].'</td>
                <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;"><a style="text-decoration: none; color: blue" href="personlinkbynidcallon.php?id='.$row["id"].'">'.$row['name'].'</a></td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['passno'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['country'].'</td> 
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['designation'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['status'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['callontopic'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['callonto'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['callondate'].'</td>
                <td  style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$row['callonadd'].'</td>
			</tr> 
            ';

            $flagCallon++;
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
        <b><h4 style="text-align: left">Total Number: <?php echo $flagCallon; ?></h4></b>
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






