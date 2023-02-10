<html>
<style>
.class1{
font-size:35px;
color: #f71000;
text-shadow: 1px 1px black;
position: absolute;
text-align: right;
right: 60px;
border: 1px solid white;
background-color: white;
padding: 10px;
padding-right: 20px;
padding-left: 30px;
top: 225px;
font-family: Arial, Helvetica, sans-serif;
}
.mysql3{
    position: absolute;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        border: 1px solid ;
        padding: 10px;
        top: 320px ;
        right: 350px ;
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
        top: 320px ;
        right: 200px ;
        background: #6ac5fe;
        width: 12%;
        border-radius: 45%;
}
</style>
<?php

$conn = new mysqli('localhost','root','','project');
$name=$_POST['username'];

if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else
{
    $sql="SELECT * FROM information WHERE Username='$name'";
    $result = mysqli_query ($conn, $sql);

    if (mysqli_num_rows($result) > 0){
      $nm=$name;
       session_start();
       $_SESSION['name'] = $nm;
       // echo "<p> Security code send successfully </p>";
       header("Location: otp.php");
       exit();

    }else{
        echo"<p class='class1'> <b>Username doest exist! </p>";
        echo " <p class=image > <img src='404.jpg' height='420px' width='940px'> </p>";
        echo "<p class='mycss6'>  <a href='username.php'>Go Back? </a> </p>"; 
        echo "<p class='mysql3'> <a href='registerform.php' > new user?</p>"; 
    }
    
}
?>

</html>