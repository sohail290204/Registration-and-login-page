<!DOCTYPE html>
<html>
<style>
body{
    background-color: #050A30;
}

    .mycss {
        color: rgb(93, 181, 10);
        text-shadow: 0.5px 0.5px black;
        text-align: right;
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
        top: 8px;
        right: 18px;
        position: absolute;
    }


    .mycss2 {
       
        font-size: 34px;
        font-family: Arial, Helvetica, sans-serif;
        color:aqua;
        position: absolute;
        top: 125px;
        right: 18px;
        text-align: right;
    }

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

    .mycss4 {
        position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 250px ;
        right: 250px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;

    }

    span {
        color: red;
    }

    .mycss5 {
        position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 300px ;
        right: 380px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;
    }
    .mycss6{
        
        position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 250px ;
        right: 80px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;
    }
    .mycss7{
        position: absolute;
        top: 145px ;
        right: 98px ;
    }
    .mycss8{
        position: absolute;
        top: 145px ;
        right: 265px ;
    }
    .mycss9{
        position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 300px ;
        right: 185px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;
    }
    .mycss10{
        position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 350px ;
        right: 280px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;
    }

</style>
</html>

<?php

$name=$_POST['username'];
$pass=$_POST['psw'];

$conn = new mysqli("localhost","root","","project");

if($conn->connect_error)
{
    die ("Fail to connect : ".$conn->connect_error);
}
else
{
  $sql="SELECT * FROM information WHERE Username='$name' and Password='$pass'";
  $result = mysqli_query ($conn, $sql);
  $pas1=$pass;
  $us1=$name;
   session_start();
   $_SESSION['pa'] = $pas1;
   $_SESSION['us'] = $us1;

    if(mysqli_num_rows($result) > 0)
    {
       $sql1 = "SELECT Name FROM information WHERE Username='$name'";
       $data = mysqli_query ($conn,$sql1);
       $result1 = mysqli_fetch_assoc($data);
       $n = $result1['Name'] ;
       echo '<p> <img src="login.webp" height="425px" width="942px" </p> ';
       echo '<p class="mycss"> <b> Login Successfully! </b> <br> </p> ';
       echo "<p class='mycss2'> <b><span>*</span></b> Welcome $n  <b><span>*</span></b></p>";
       echo "<p class='mycss5'> <a href='loginform.php' >Logout?</a> </p> ";
       echo "<p class='mycss9'> <a href='delete.php' >delete account</a> </p> ";
       echo "<p class='mycss10'> <a href='edit2.php' >update details?</a> </p> ";
    }
    else
    {
        echo '<p> <img src="wrong4.jpg" height="405x" width="959px" </p> ';
        echo "<p class='mycss3'><b> Invalid Username or Password </b></p>";
        echo '<p class="mycss8"> <img src="registration.png" height="108px" width="100px" </p> ';
        echo "<p class='mycss4'> New User? <a href='registerform.php' >Register</a> </p> ";
        echo '<p class="mycss7"> <img src="forgot.png" height="108px" width="100px" </p> ';
        echo "<p class='mycss6'>  <a href='username.php'>Forgot Password? </a> </p>";  
    }
}
    ?>