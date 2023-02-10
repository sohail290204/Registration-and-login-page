<html>
    <style>
.mysql3{
	position: absolute;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    border: 1px solid ;
    padding: 10px;
    top: 310px ;
    left: 438px;
    background: #6ac5fe;
    width: 12%;
    border-radius: 45%;
	}
    .wrong{
   font-family: Arial, Helvetica, sans-serif;
   font-size: 40px;
   background-color: white;
   padding: 1px;
   color: red; 
   margin-top: 100px;
   margin-left: 320px;
   width: 35%;
   border: 1px solid white;


    }
.image{
   text-align: center;
   width: 190px;
   height: 120px;
   margin-left: 240px;
   text-align: center;
 
}
 .s2{
    position: absolute;
    background-color: #0a0703;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    padding-top: 150px;
    padding-right: 150px;
    padding-left: 330px;
    padding-bottom: 200px;
    opacity: 85%;
    top: 40px;
    left: 250px;
    border-radius: 10%;
 }
 .s3{
    font-size: 25px;
    position: absolute;
    background-color: #0066FF;
    color: white;
    text-shadow: 2px 1px black;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    padding-top: 30px;
    padding-right: 30px;
    padding-left: 30px;
    padding-bottom: 30px;
    opacity: 80%;
    top: 170px;
    left: 350px;
    border-radius: 10%;
 }
</style>


<body>
    
<?php

$otp = $_POST['otp'];

$conn = new mysqli("localhost","root","","project");
if($conn->connect_error)
{
    die ("Fail to connect : ".$conn->connect_error);
}else
{   
	if($otp==1234){
    session_start();
    $nm1 = $_SESSION["name"]; 
	$query = " SELECT Password FROM information WHERE Username = '$nm1' ";
    $data = mysqli_query ($conn, $query);
    $result1 = mysqli_fetch_assoc($data);
    $save = $result1['Password'];
    echo " <p class=s2> </p> ";
    echo '<p class=s1> <img src="pass2.webp" height="425px" width="935px"> </p>';
    echo "<p class=s3> Your Password is : $save   </p>";
    echo "<p class='mysql3'> <a href='loginform.php' > Go to login page </p>";
 	}else{
        //echo " <p class=image > <img src='securitycodeerror.png' height='440px' width='550px' > </p>";
       // echo "<p class=wrong><b>Wrong Security code</b></p>";
       session_start();
		$_SESSION['code']='1';
		header("Location:otp.php");
    }
}
?>
</body>
</html>