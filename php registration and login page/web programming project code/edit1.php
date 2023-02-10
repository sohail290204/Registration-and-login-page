<?php
$n1=$_POST['name'];

$conn = new mysqli("localhost","root","","project");
if($conn->connect_error)
{
    die ("Fail to connect : ".$conn->connect_error);
}
else{ 
session_start();
$u=$_SESSION['us'];
$sql2="UPDATE information SET Name = '$n1' WHERE Username='$u'";
$data = mysqli_query ($conn, $sql2);

header("Location:loginform1.php");

}?>
<!DOCTYPE html>
<html>
<style>
body{
background-color: black;

}
</style>

</html>
