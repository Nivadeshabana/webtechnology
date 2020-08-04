<?php
session_start();


if(!isset($_SESSION['username']))
{
	header('Location:./index.php');
}
if(isset($_POST['display']))
{
   
echo "".$_SESSION["username"];
    echo"<script>alert('this is your 1 st secure page if you want to go next page then click nextpage') </script>";
}


    
?>
<html>
    <head>
        <link rel="stylesheet" href="login_css.css">
    </head>
    <body>
        <center>
            <div class="row" style="margin-left:40px;margin-right:40px;margin-top:60px">
        <div class="container" style="background-color:burlywood">
        <br>
        <form action="nextpage.php" method="post">
            <button type="submit" value="nextpage" name="submit">nextpage</button>
        </form>
            </div>
            <br>
        <div class="container" style="background-color:coral">
        <form action="#" method="post">
            <br>
            <button type="submit" value="display" name="display">Display</button>
            <br>
        </form>
        </div>
            </div>
        </center>
    </body>
</html>