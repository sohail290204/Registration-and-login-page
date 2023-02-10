<html>
<style>
     .mycss3 {
        font-size: 45px;
        font-family: Arial, Helvetica, sans-serif;
        color: red;
        text-shadow: 1px 1px black;
        position: absolute;
        top: 20px;
        right: 110px;
        text-align: center;
    }

    .mycss6{
        
        position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 250px ;
        right: 170px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;
    }
    .mycss7{
        position: absolute;
        top: 145px ;
        right: 189px ;
    }

</style>

</html>

<?php
$passs=$_POST['password'];
$conn = new mysqli("localhost","root","","project");
if($conn->connect_error)
{
    die ("Fail to connect : ".$conn->connect_error);
}
else{    
    session_start();
    $p1 = $_SESSION["pa"]; 
        if($passs==$p1)
        {
           header("Location:delete3.php");
           exit();
        }else{
            echo '<p> <img src="wrong4.jpg" height="405x" width="959px" </p> ';
            echo "<p class='mycss3'><b> Invalid Password </b></p>";
            //echo '<p class="mycss8"> <img src="registration.png" height="108px" width="100px" </p> ';
            //echo "<p class='mycss4'> New User? <a href='registerform.php' >Register</a> </p> ";
            echo '<p class="mycss7"> <img src="forgot.png" height="108px" width="100px" </p> ';
            echo "<p class='mycss6'>  <a href='username.php'>Forgot Password? </a> </p>";  
        }
    }
?>