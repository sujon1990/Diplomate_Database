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

</head>
</html>


<div class="container">
    <br />
    <br />

    <h2 align="center">Search Local Intl Org Staff </h2><br />

    <div align="center" >
        <table style="table-layout: auto" width="100%" class="table-condensed" >

 </table>
        </div>

    <br>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder="Search by Keywords" class="form-control" />
        </div>
    </div>
    <br />
    <div id="result"></div>
</div>
<div style="clear:both"></div>
<br />

<br />
<br />
<br />


<script>


    $(document).ready(function(){
        function load_data(query)
        {
           // alert(selected_option_value)
            $.ajax({
                url:"fetchlocalintorgreport.php",
                method:"post",
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function(){
            var search = $(this).val();

            if(search != '')
            {
                load_data(search);
            }
            else
            {
                //load_data();
            }
        });
    });
</script>




