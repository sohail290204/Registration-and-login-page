<!DOCTYPE html>
<html>
<style>
	body{
    background-color: #050A30;
}
.mysql{
	color:red;
	text-align:center;
	position: absolute;
	font-size: 40px;
	text-shadow: 0.5px 0.5px black;
	font-family: Arial, Helvetica, sans-serif;
	top: 160px;
    left: 225px;
}
.mysql1{
	color:red;
	text-align:center;
	position: absolute;
	text-shadow: 0.6px 0.6px black;
	top: 160px;
    left: 300px;
	font-size: 40px;
	font-family: Arial, Helvetica, sans-serif;
	

}
.mysql2{
	color:rgb(93, 181, 10);
	position: absolute;
    font-size: 45px; 
    font-family: Arial, Helvetica, sans-serif;
	top: 20px;
    right: 35px;
   
}
	
.mysql3{
	position: absolute;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    border: 1px solid ;
    padding: 10px;
    top: 360px ;
    left: 43%;
    background: #6ac5fe;
    width: 12%;
    border-radius: 45%;
	}
.mysql4{
	color:aquamarine;
	position: absolute;
    font-size: 34px; 
    font-family: Arial, Helvetica, sans-serif;
	top: 125px;
    right: 35px;
}
.mysql6{
	position: absolute;
	top: 172px;
    left: 220px;
}
.mysql7{
	position: absolute;
	top: 260px;
    left: 28px;
}
.mysql8{
	position: absolute;
	top: 260px;
    left:18px;
}
.mysql9{
	position: absolute;
	top: 280px;
    left:18px;}
.mysql10{
	position: absolute;
	top: 100px;
    right: 395px;
}

</style>
</html>

<?php

$name=$_POST['uname'];
$pass=$_POST['password1'];
$name2=$_POST['name'];
$email=$_POST['Email'];

$conn = new mysqli('localhost','root','','project');

if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
	echo "connection error";
}else
{
	$sql= "SELECT * FROM information WHERE Username = '$name '";
	$result = mysqli_query ($conn, $sql);
	
	$psw1=$_POST['psw1'];
	$password1=$_POST['password1'];
	if($password1!==$psw1){
		//echo '<p> <img src="error.jpg" height="410px" width="940px" </p> ';
		//echo '<p class="mysql9"> <img src="password1.png" height="130px" width="170px" </p> ';
		//echo '<p class="mysql10"> <img src="wrong.jpg" height="75px" width="170px" </p> ';
		//echo" <p class='mysql'> <b> Password does not match </b> </p>";
		//echo "<p class='mysql3'> <a href='registerform.php' > click here to go back </p>";
		session_start();
		$_SESSION['pass']='1';
		header("Location:registerform.php");

 	}
	else{
		
			if(mysqli_num_rows($result) > 0)
			{
				  //echo '<p> <img src="error.jpg" height="410px" width="940px" </p> ';
				  //echo "<p class='mysql1' > <b> User already exist <b> </p>";
				  //echo '<p class="mysql7"> <img src="error2.png" height="150px" width="120px" </p> ';
				  //echo "<p class='mysql3'> <a href='registerform.php' > click here to go back </p>";
				  //echo '<p class="mysql6"> <img src="usererror.png" height="60px" width="60px" </p> ';
				  session_start();
				  $_SESSION['user']='2';
				  header("Location:registerform.php");
			
				}
			else
			{
				$sql1="SELECT * FROM information WHERE  Email='$email'";
				$result1 = mysqli_query ($conn, $sql1);
				if(mysqli_num_rows($result1) > 0)
				{
				  //echo '<p> <img src="error.jpg" height="410px" width="940px" </p> ';
				  //echo "<p class='mysql1' > <b> Email id already exist </b> </p>";
				  //echo '<p class="mysql8"> <img src="error4.png" height="150px" width="150px" </p> ';
				  //echo "<p class='mysql3'> <a href='registerform.php' > click here to go back </p>";
				  //echo '<p class="mysql6"> <img src="usererror.png" height="60px" width="60px" </p> ';
				  session_start();
				  $_SESSION['email']='3';
				  header("Location:registerform.php");
				
				}else
				{

					$sql = "INSERT INTO information(Username, Password, Name, Email)
					VALUES ('$name', '$pass','$name2','$email')";
					$result=mysqli_query($conn,$sql);
				
					if($result){
						echo '<p> <img src="login.webp" height="425px" width="942px" </p> ';
	 				   	echo "<p class='mysql2'> <b>Registration Successful!</b> </p>";
						echo "<p class='mysql4'> Thanks for Joining with us </p>";
						echo "<p class='mysql3'> <a href='loginform.php' target='_blank'> Go to login page </p>";
					}
					else{
						die (mysqli_error($conn));
		 
		}	}	}

	     		
	
	}


}
