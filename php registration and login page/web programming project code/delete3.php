<!DOCTYPE html>
<html>
    <style>
        body{
        background-image: url("del.webp");
        background-size: 967px 445px ;
        background-repeat: no-repeat;
        text-align: center;
        color: white;
        padding-top: 30px;
     
        
        }
        .box{
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            padding: 20px;
            width:600px;
            height:250px;
            transform: translate(24%,5%);
            opacity: 90%;
            font-size: 30px;
            border-radius: 10%;
        }
        span{
            color:red;
        }
        .box1{
            position: absolute;
            height:200px ;
            left:200px ;

        }
    .mysql3{
	position: absolute;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    border: 1px solid ;
    padding: 10px;
    top: 260px ;
    left: 410px;
    background: #6ac5fe;
    width: 12%;
    border-radius: 45%;
	}
    </style>
</html>

<?php
$conn = new mysqli("localhost","root","","project");

if($conn->connect_error)
{
    die ("Fail to connect : ".$conn->connect_error);
}
else
{   session_start();
    $u=$_SESSION['us'];
    $sql1 = "DELETE FROM information WHERE Username='$u'";
    $result = mysqli_query ($conn, $sql1);

    $sql = "SELECT * FROM information WHERE Username='$u'";
    $result3=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result3) == 0){
       // echo '<p class="box1"><img src="del1.webp" height="100px" width="100px"   </p>';
        echo "<p class='box'><br><br><br><span><b>*</b></span> User deleted <span><b>*</b></span> </p>";
        echo "<p class='mysql3'> <a href='registerform.php' > Create account? </p>";
    }else{
        echo "<p class='box'>some error occured</p>";
    }
}

?>