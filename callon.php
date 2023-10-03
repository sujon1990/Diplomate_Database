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

<div style="background-color: #CCFFFF">
    <?php include 'header.php';?>

    <div id="footer">
        <h4>
            <a href="dataentry.php"> BACK | </a>
            <a href="index.php">Home</a>

        </h4>
    </div>
    <br>
    <br>

    <div >

<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="boots/district.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.css">

</head>
</html>
    <div >

       <h3 align="center">Add Call On/Visit Info</h3><br>

        <div align="center" style="font-family: 'Times New Roman', sans-serif;">
            <form method="post" action="getcallon.php" enctype="multipart/form-data">
                <table align="center">



                    <tr>
                        <th> <label>1. Individuals Passport No</label></th>
                        <td><strong>: </strong><input type="text" name="passno" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>2. Individuals NID/SSN</label></th>
                        <td><strong>: </strong><input type="text" name="nid" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                    

                    <tr>
                        <th> <label>3. Call On/Visit Purpose</label></th>
                        <td><strong>: </strong><input type="text" name="callontopic" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th> <label>4. Call On/Visit To</label></th>
                        <td><strong>: </strong><input type="text" name="callonto" value=""   size="50"></td>
                    </tr>


                    <tr>
                        <td><br></td>
                    </tr>

                     <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>5. Call On/Visit Address</label></th>
                        <td><textarea  name="callonadd"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    
                           <tr>
                        <th><div  style="padding-left: 52px"> Post Code</div></th>
                        <td><strong>: </strong><input type="text" name="callonup" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                                       <tr>
                        <th><div style="padding-left: 52px">Police Station</div></th>
                        <td><strong>: </strong><input type="text" name="callonps" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <th><div style="padding-left: 52px">District</div></th>
                        <td><strong>: </strong><input type="text" name="callondis" value=""   size="50"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>6. Call On/Visit Date</label></th>
                        <td><strong>: </strong><input type="text" name="callondate" value="" placeholder="yyyy/mm/dd" size="50"  id="callondate"></td> 
                    </tr>
                     <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <th> <label>7. Call On/Visit Time</label></th>
                        <td></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    
                           <tr>
                        <th><div  style="padding-left: 52px"> From</div></th>
                        <td><strong>: </strong><input type="time" name="timefrom"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                                       <tr>
                        <th><div style="padding-left: 52px">To</div></th>
                        <td><strong>: </strong><input type="time" name="timeto"></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
             
                     <tr>
                        <td><br></td>
                    </tr>
                    

                    <tr>
                        <th> <label>8. Other Info (If any) </label></th>
                        <td><textarea  name="other"    rows="4" cols="50" ></textarea></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

            
                     <input type="hidden" name="det" value="<?php echo $_SESSION['username']; ?>">  

                    <tr>
                        <td></td>
                        <td><input type="submit"  class="btn btn-success" value="Submit"></td>
                    </tr>
        <tr>
            <td>
                <h7>
                    <br>
                </h7>
            </td>
        </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</div>

<script src="boots/jquery1.min.js"></script>
<script src="boots/bootstrap.min.js"></script>
<script src="scripts.js"></script>
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $(function () {
        $("#callondate").datepicker({
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


<?php include 'footer.php';?>
