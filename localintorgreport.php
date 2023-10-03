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

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="boots/district.min.js"></script>

    <style>
body {font-family: Cambria, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: hand;
  opacity: 0.8;
  position: absolute;
  bottom: 23px;
  right: 28px;
  width: 280px;

  text-align: center;

}

/* The popup form - hidden by default */
.form-popup {
    display: none;
  position: absolute;
  align-items: center;
  bottom: 30%;
  right: 50%;
  -webkit-transform: translate(50%, 0); 
  border: 0px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  text-align: center;
  width: 500px;
  padding: -2px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
 /* padding: 16px 20px;*/
  border: none;
  cursor: pointer;
  /*width: 50%;*/
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="form-popup" id="myForm">
  <h4><form action="listlocalintorgemployee.php" class="form-container">
    <label for="Country" style="padding-left: 10px">Select Organization</label>
        <select name="oname" id="oname" >
                <option value="">Select</option>
                <?php $query =mysqli_query($connect,"SELECT DISTINCT oname FROM person WHERE infotype = 'Inetrnational Organization' AND emptype='Local'  ORDER BY oname ASC");
                while($row=mysqli_fetch_array($query))
                { ?>
                    <option value="<?php echo $row['oname'];?>"><?php echo $row['oname'];?></option>
                    <?php
                }
                ?>
        </select>

    <button type="submit" class="btn">Search List</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form></h4>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>

<?php include 'header.php';?>
<!---->
<!--<div align="center">-->
<!---->
<!--    <div style="background-color: #722B90">-->
<!--    <!-- logged in user information -->
<!---->
<!--        <div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 10px; background-color: #722B90; padding: 10px;">-->
<!--            --><?php // if (isset($_SESSION['username']) && ($_SESSION['zonee']) ) : ?>
<!--            <div style="text-align: center;padding: 20px 0; font-size: 30px;">        -->
<!--                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp -->
<!--            </div>-->
<!--            <div style="text-align: center;padding: 0px 0; font-size: 30px;">-->
<!--                <h1>-->
<!--                    <strong style="color: #FCD963;">-->
<!--                        EAB Personnel Database of Embassy/HC/Intl Org-->
<!--                        <strong>-->
<!--                </h1>-->
<!--                <h2>Intl. Organization Local Employee Reports</h2>-->
<!--            </div>-->
<!--            <div style="text-align: center;padding: 67px 0; font-size: 16px;" >-->
<!--                Welcome User: -->
<!--                <strong>-->
<!--                    --><?php //echo $_SESSION['username']; ?><!--                  -->
<!--                    | &nbsp |-->
<!--                    <a href="index.php?logout='1'" style="color:  #FCD963;">-->
<!--                        Logout-->
<!--                    </a>-->
<!--                </strong>  -->
<!--            </div>-->
<!--            --><?php //endif ?>
<!--        </div>-->
<!--        </div>-->
<!--    <br>-->
<!--        <img src="img/Picture1.png" height="225px" width="225px">-->
<!--    </div>-->
<!---->
<!--</div>-->


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

        <div style="text-align: right;padding: 67px 0; font-size: 16px; color:  #FCD963;" >
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

        <div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 10px; background-color: #722B90; padding: 10px;}">
            <?php  if (isset($_SESSION['username']) && ($_SESSION['zonee']) ) : ?>
            <div style="text-align: center;padding: 20px 0; font-size: 30px;">

                &nbsp &nbsp &nbsp &nbsp &nbsp
            </div>

            <div style="text-align: center; font-size: 400%;">

                <strong style="color: #FCD963; padding-bottom: 100px;">
                    EAB Personnel Database of Embassy/HC/Intl Org</br>

                    <strong>

            </div>

        </div>
        <?php endif ?>
    </div>
    <br>


    <div style="color: #722B90; font-size: 400%;">Intl. Organization Local Employee Reports</div>
    <br>
    <img src="img/Picture1.png" height="225px" width="225px">
</div>

<?php include 'header.php';?>
<div id="footer">
    <h4>
        <a href="intorg.php">BACK |</a>
        <a href="index.php">Home |</a> 
        <a onclick="openForm()">List of Employee |</a> 
        <a href="advancelocalintorgemployee.php">Advance Search</a>  

    </h4>
</div>
<?php include 'footer.php';?>

