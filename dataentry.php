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

<?php include 'header.php';?>

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


<!--    <div align="center">-->
<!---->
<!--        <div style="background-color: #722B90">-->
<!--            <!-- logged in user information -->-->
<!---->
<!--            <div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 10px; background-color: #722B90; padding: 10px;">-->
<!--                --><?php // if (isset($_SESSION['username']) && ($_SESSION['zonee']) ) : ?>
<!--                <div style="text-align: center;padding: 20px 0; font-size: 30px;">        -->
<!--                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp -->
<!--                </div>-->
<!--                <div style="text-align: center;padding: 0px 0; font-size: 30px;">-->
<!--                    <h1>-->
<!--                        <strong style="color: #FCD963;">-->
<!--                             -->
<!--                         <strong>-->
<!--                    </h1>-->
<!--                    <h2>Data Entry</h2>-->
<!--                </div>-->
<!---->
<!--            --><?php //endif ?>
<!--        </div>-->
<!--        </div>-->
<!--        <br>-->
<!--            <img src="img/Picture1.png" height="225px" width="225px">-->
<!--        </div>-->
<!---->
<!--    </div>-->

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


        <div style="color: #722B90; font-size: 400%;">Data Entry</div>
        <br>
        <img src="img/Picture1.png" height="225px" width="225px">
    </div>

<?php include 'header.php';?>
    <div id="footer">
        <h4>
            <a href="index.php">Back |</a> 
            <a href="index.php">HOME |</a> 
            <a href="embassyform.php">Embassy |</a>
            <a href="intlorgform.php">Intl. Organization |</a> 
            <a href="person.php">Personnel |</a> 
            <a href="dependent.php">Dependent |</a> 
            <a href="callon.php">Call On/Visit Info</a>  
        </h4>
    </div>
<?php include 'footer.php';?>