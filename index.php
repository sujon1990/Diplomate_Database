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


<?php include 'header.php'; ?>
<div id="main">
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
                                WELCOME TO EAB PROTOCOL SECTION</br>

                                <strong>

                        </div>

                    </div>
                    <?php endif ?>
                </div>
                <br>


                <div style="color: #722B90; font-size: 400%;">Personnel Database of Embassy/HC/Intl Org</div>
                <br>
                <img src="img/Picture1.png" height="225px" width="225px">
            </div>





    <div style="width: 100%;font-family: 'Cambria', sans-serif;font-size: 90%;height: 28px;padding: 20px 0 5px 0;text-align: center; background: transparent;color: black ;text-transform: uppercase; letter-spacing: 0.1em;}">

        <h4 class="footer" >
            
            <?php
                if ($_SESSION['user_type']=='SAdmin') {
                    echo '<a href="index.php" style="color: black;">Home |</a>
            <a href="register.php" style="color: black;">Add User |</a>
            <a href="dataentry.php" style="color: black;">Data Entry |</a>
            <a href="report.php" style="color: black;">Reports |</a>
            <a href="multilocalembassyemployee.php"style="color: black;">Multi-level Search |</a>
            <a href="multicallon.php" style="color: black;">Call On/Visit Info |</a>
            <a href="deleteddata.php" style="color: black;">Deleted Data</a>';
                }

                else{
                    echo'
                    <a href="index.php" style="color: black;">Home |</a>
                    <a href="dataentry.php" style="color: black;">Data Entry |</a>
                    <a href="report.php" style="color: black;">Reports |</a>
                    <a href="multilocalembassyemployee.php"style="color: black;">Multi-level Search |</a>
                    <a href="multicallon.php" style="color: black;">Call On/Visit Info </a>';
                }
             ?>

            
        </h4>

    </div>


<?php include 'footer.php';?>

