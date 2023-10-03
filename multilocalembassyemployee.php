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
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="boots/district.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.css">

    <style>
    	#loading
    	{
    		text-align: center;
    		background: url('loader.gif') no-repeat center;
    		height: 150px;
    	}
    </style>
	
</head>
<body>
	    <div align="center">
        <h4>
            <a href="index.php"> Back | </a>
            <a href="index.php">Home</a>

        </h4>
    </div>


	<form  method="post" action="fetch_multi.php" enctype="multipart/form-data">
	<div class="container">
		<h2 align="center">Multi-Level Data Filtering </h2><br />
		<div class="row" align="center">

				<table>
					<tr>
						<td><h3>Individuals Passport No</h3>
                    	<input type="text" name="passno" value="" ></td>
						<td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
						<td><h3>Individuals NID/SSN No</h3>
                	<input type="text" name="nid" value="" ></td>
					</tr>

					<tr>
					
					<td><h3>Organization Type</h3>
					<?php 
					$query = "SELECT DISTINCT infotype FROM project.person ORDER BY infotype ASC ";
					$result = mysqli_query($connect, $query);
					?>
					<div class="list-group-item checkbox">
						<label>	
					 	<select name="infotype" required>
					<?php
					foreach ($result as $row)
					{
					?> 
                        <option value="<?php echo $row['infotype'] ?>"><?php echo $row['infotype'] ?></option>
					<?php	
					}
					?>
					 </select>

						</label></td>

					<td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
					<td> <h3>Organization Name</h3>
                    <?php
                    $query = "SELECT DISTINCT oname FROM project.person ORDER BY oname ASC ";
                    $result = mysqli_query($connect, $query);
                    ?>
                    <div class="list-group-item checkbox">
                        <label>
                            <select name="oname">
                                <?php
                                foreach ($result as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['oname'] ?>"><?php echo $row['oname'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>

                        </label></td>	

					</tr>

					<tr>
						<td> <h3>Employee Type</h3>
                    <?php
                    $query = "SELECT DISTINCT emptype FROM project.person ORDER BY emptype ASC ";
                    $result = mysqli_query($connect, $query);
                    ?>
                    <div class="list-group-item checkbox">
                        <label>
                            <select name="emptype">
                                <?php
                                foreach ($result as $row)
                                {
                                    ?>
                                    <option value="<?php echo $row['emptype'] ?>"><?php echo $row['emptype'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>

                        </label></td>
						<td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
						<td><h3>Country</h3>
					<?php 
					$query = "SELECT DISTINCT country FROM project.person ORDER BY country ASC ";
					$result = mysqli_query($connect, $query);
					?>
					<div class="list-group-item checkbox">
						<label>	
					 	<select name="country">
					<?php
					foreach ($result as $row)
					{
					?>
                        <option value="<?php echo $row['country'] ?>"><?php echo $row['country'] ?></option>
					<?php	
					}
					?>
					 </select>

						</label></td>
					</tr>

					<tr>
						<td><h3>Designation</h3>
					<?php 
					$query = "SELECT DISTINCT designation FROM project.person ORDER BY designation ASC ";
					$result = mysqli_query($connect, $query);
					?>
					<div class="list-group-item checkbox">
						<label>	
					 	<select name="designation">
					<?php
					foreach ($result as $row)
					{
					?>
                        <option value="<?php echo $row['designation'] ?>"><?php echo $row['designation'] ?></option>
					<?php	
					}
					?>
					 </select>

						</label></td>
						<td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
						<td><h3>Religion</h3>
					<?php 
					$query = "SELECT DISTINCT religion FROM project.person ORDER BY religion ASC ";
					$result = mysqli_query($connect, $query);
					?>
					<div class="list-group-item checkbox">
						<label>	
					 	<select name="religion">
					<?php
					foreach ($result as $row)
					{
					?>
                        <option value="<?php echo $row['religion'] ?>"><?php echo $row['religion'] ?></option>
					<?php	
					}
					?>
					 </select>

						</label></td>
					</tr>

					<tr>
						<td><h3>Status</h3>
					<?php 
					$query = "SELECT DISTINCT status FROM project.person ORDER BY status ASC ";
					$result = mysqli_query($connect, $query);
					foreach ($result as $row) 
					{
					?>
					<div class="list-group-item checkbox">
						<label>
							<input type="radio" id="status" name="status" value="<?php echo $row['status'] ?>"> <?php echo $row['status'] ?>				
						</label>
					</div>
					<?php	
					}
					?> </td>
					</tr>


					<tr>
						<td><h3>BD Entry Date</h3>
                From: <input type="text" name="bdentryfrom" value=""  placeholder="yyyy/mm/dd" size="50" id="bdentryfrom" ></td>
                <td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
						<td><h3><br></h3>
                To: <input type="text" name="bdentryto" value=""  placeholder="yyyy/mm/dd" size="50" id="bdentryto" ></td>
					</tr>

					<tr>
						<td> <h3>Departure Date </h3>
                            From: <input type="text" name="depdatefrom" value=""  placeholder="yyyy/mm/dd" size="50" id="depdatefrom" ></td>
						<td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
						<td><h3><br></h3>
                            To: <input type="text" name="depdateto" value=""  placeholder="yyyy/mm/dd" size="50" id="depdateto" ></td>
					</tr>

					<tr>
						<td> <h3>Appointment Date </h3>
                            From: <input type="text" name="apdatefrom" value=""  placeholder="yyyy/mm/dd" size="50" id="apdatefrom" ></td>
						<td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
						<td><h3><br></h3>
                            To: <input type="text" name="apdateto" value=""  placeholder="yyyy/mm/dd" size="50" id="apdateto" ></td>
					</tr>
					<tr><td></td><td>&nbsp &nbsp &nbsp &nbsp &nbsp</td></tr>
				</table>

			</div>
				
		</div>
		<div align="center"><input type="submit"  class="btn btn-success" value="Search"></div><br>

	</div>

	</form>
<script src="boots/jquery1.min.js"></script>
<script src="boots/bootstrap.min.js"></script>
<script src="scripts.js"></script>
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $(function () {
        $("#bdentryfrom").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

<script>
    $(function () {
        $("#bdentryto").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

<script>
    $(function () {
        $("#apdatefrom").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

<script>
    $(function () {
        $("#apdateto").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

<script>
    $(function () {
        $("#depdatefrom").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

<script>
    $(function () {
        $("#depdateto").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            //gotoCurrent: true,
        });
    });
</script>

</body>
</html>