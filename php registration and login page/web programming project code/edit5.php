<?php
$p1=$_POST['password'];

$conn = new mysqli("localhost","root","","project");
if($conn->connect_error)
{
    die ("Fail to connect : ".$conn->connect_error);
}
else{ 
session_start();
$u=$_SESSION['us'];
$sql4="UPDATE information SET Password = '$p1' WHERE Username ='$u'";
$result4 = mysqli_query ($conn, $sql4);

header("Location:loginform2.php");
}
?>
<!DOCTYPE html>
<html>
<style>
body{
background-color: black;

}
</style>

</html>
