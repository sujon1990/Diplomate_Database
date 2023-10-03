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

$emb =  $_GET['embassy'];
$sql = "SELECT * FROM project.embassyform WHERE embassy= '".$emb."' ";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_array($result))
    {

        $pp = $row["profile_image"];

        $embassy = $row["embassy"];

        $name = $row["name"];

        $sdate = $row["sdate"];

        $location = $row["location"];

        $Lroad = $row["Lroad"];



         $Lps = $row["Lps"];

        $Lplot = $row["Lplot"];

        $phonenum = $row["phonenum"];




         $fax = $row["fax"];

        $email = $row["email"];

        $webadd = $row["webadd"];




        $noe = $row["noe"];
        $sumlocalempembassy = $row["sumlocalempembassy"];

        $sumforeignempembassy = $row["sumforeignempembassy"];
        $sumlocalemployee=  $row["sumlocalemployee"];

        $branch = $row["branch"];

        $remark = $row["remark"];

        $other = $row["other"];
        $det = $row["det"];

       
    }
}
else
{
    echo 'Data Not Found';
}
?>

<?php include 'header.php';?>

<?php include 'footer.php';?>

<html>
<head>

    <link href="https://fonts.maateen.me/Cambria/font.css" rel="stylesheet">

    <style>
        td{
            width: 70%;
            background-color: #c8dcc8;
        }

        th{
            background-color: #dff0d8;
            width: 30%;
            font-weight: normal;
            font-family: "Cambria", arial, sans-serif;
        }


    </style>
</head>

<body>



        <div id="customers" align="center">
            <br><br>
            <div id="printableArea">


            <table style="margin-top: -17%">

                <tr>
                    <h4 align="center" > <u style="font-weight:  normal; font-family: "Cambria", arial, sans-serif" >Embassy Information</u></h4>
                    <th colspan="2" style="float: auto;"><div align="center"><img src="<?php echo 'images/' . $pp ?>" width="150px" height="150px" alt=" Image Not Found"></div><div align="center"></div><br></th>
                </tr>
        <tr><th width="30%" align="left" style="vertical-align: text-top; font-weight: normal; font-family: "Cambria", arial, sans-serif">1. Country:</th><td width="70%"> <?php echo $embassy; ?></td></tr>
        <tr>
            <th align="left" style="vertical-align: text-top; font-weight: normal; font-family: "Cambria", arial, sans-serif">2. Name of Ambassador  :</th>
            <td><?php echo $name;?></td>
        </tr>



        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">3. Starting Date :</th><td><?php echo $sdate; ?></td></tr>

         
        
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">4. Location :</th><td><?php echo $location; ?></td></tr><br>
        <tr><th style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">Police Station :</th><td><?php echo $Lroad; ?></td></tr><br>
        <tr><th  style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">Post Code :</th><td><?php echo $Lps; ?></td></tr><br>

         <tr><th  style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">District :</th><td><?php echo $Lplot; ?></td></tr><br>


        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">5. Contact Details :</th><td></td></tr><br>
        <tr><th  style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">(a) Phone Number :</th><td><?php echo $phonenum; ?></td></tr><br>
        <tr><th style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">(b) Fax Number :</th><td><?php echo $fax; ?></td></tr><br>
        <tr><th  style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">(c) E-mail :</th><td><?php echo $email; ?></td></tr><br>
        <tr><th style=" padding-left: 52px; vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">(d) Web Address :</th><td><?php echo $webadd; ?></td></tr><br>


        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">6. Number of Diplomats :</th><td><?php echo $noe; ?></td></tr><br>
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">7. Number of Non-Diplomats :</th><td><?php echo $sumlocalempembassy; ?></td></tr><br>
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">8. Total Number of Foreign staffs :</th><td><?php echo $sumforeignempembassy; ?></td></tr><br>
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">9. Number of Local staffs :</th><td><?php echo $sumlocalemployee; ?></td></tr><br>



        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">10. Branch :</th><td><?php echo $branch; ?></td></tr><br>
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">11. Remarks :</th><td><?php echo $remark; ?></td></tr><br>
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif">12. Other Info :</th><td><?php echo $other; ?></td></tr><br>
        <tr><th align="left" style="vertical-align: text-top; font-weight:  normal; font-family: "Cambria", arial, sans-serif"> </th><td align="right"><small>Prepared by: <?php echo $det; ?></small></td></tr><br>


    </div>

    </table>
    </div>
    <br>

    <div align="center">
        <button class="btn btn-info" onclick= history.back()>BACK</button>
        <button class="btn btn-info" onclick="printPageArea('printableArea')">Print This Page</button></div>

    <br>
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