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
    	<h2 align="center">List of Deleted Data </h2><br />
        <table  class="table table bordered" id="listview" style="text-align: center;" >

        	<tr>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Name</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Organization Type</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Organization Name</th>
                <th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Country</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Designation</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Status</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Created By</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Created Time</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Updated By</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Updated Time</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Deleted By</th>
        		<th style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">Deleted Time</th>
        	</tr>
   		
<?php
$sql = "SELECT * FROM project.deleteddata ORDER BY id DESC ";

 $result = mysqli_query($connect, $sql);


if(mysqli_num_rows($result) > 0)
{
	
    while($row = mysqli_fetch_array($result))
    {

        $id = $row["id"];
        $infotype = $row["infotype"];

        $oname = $row["oname"];

        $name =  $row["name"];

        $country = $row["country"];


        $designation = $row["designation"];

        $status = $row["status"];


        $createdby = $row["submit"];
        $createdtime = $row["createdtime"];
        $updatedby = $row["updatedby"];
        $updatedtime = $row["updatedtime"];
        $deletedby = $row["deletedby"];
        $deletedtime = $row["deletedtime"];

        

        echo '<tr> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;"><a style="text-decoration: none; color: blue" href="deletedlink.php?id='.$id.'">'.$name.'</a></td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$infotype.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$oname.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$country.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$designation.'</td>
                    <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$status.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$createdby.'</td> 
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$createdtime.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$updatedby.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$updatedtime.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$deletedby.'</td>
                  <td style=" color: black; border: 1px solid #ddd; padding: 8px; vertical-align: top;">'.$deletedtime.'</td>
              </tr>';

    }



	}
	else
	{
	    echo 'Data Not Found';
	}	
         
    	?>
 		</table>

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




