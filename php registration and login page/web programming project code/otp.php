<?php
session_start();
$message='';
if(isset($_SESSION['code'])){
  $message="Security code is Wrong";
}
?>

<html>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

  input[type=text], input[type=password] {
  width: 30%;
  padding: 10px 20px;
  margin: 8px 0;
  background-color: #c8fc92;
  display: inline-block;
  border: 2px solid rgb(40, 40, 40);
  box-sizing: border-box;
  text-align: center;
  font-size: 12px;
  position: relative;
  top: 105px;
}

.box input[type=text]:focus, input[type=password]:focus {
  width: 40%;
  border-color: 10px solid green;
  color: red;
  background-color: #FFFF99;
  color: red;

}
.box{
    transition: 0.02s;
  }

.container {
  padding:90px;
  text-align: center;
  background-color: #ECFFDC;
  font-size: 20px;
  border: 2px solid black;
}
button {
  background-color: #07b0ff	;
  color: white;
  padding: 8px ;
  margin: 8px 0;
  border: 2px solid black;
  cursor: pointer;
  width: 15%;
  border-radius: 24px;
  font-size: 10px; 
  position: relative;
  top: 100px;
}
button:hover{
  background-color: #abf7b1;
  color:black;
 }

label{
font-size: 30px;
position: relative;
top: 100px;
}

.s1{
  position: absolute;
  top: -10px ;
  right: 375px; 
}
.s2{
  position: absolute;
  bottom: 40px ;
  left: 30px; 
}
p{
  position: relative;
  top: 70px;
}
.p1{
font-size: 17px;
color: red;
position: absolute;
top: 175px;
right: 400px;

}
</style>

  <form class=box action="otp2.php" method="post">
  <p class="p1"><?php echo $message; ?></P>
    <div class="container">
      <img class="s1" src="code2.svg" height="220px" width="220px">
      <img class="s2" src="code1.jpg" height="200px" width="200px">
      <br>
      <label for="otp"><b>Enter Security Code</b></label>
      <br>
      <input type="text" placeholder="Security code" name="otp" required>
      <br>
      <button type="submit" >Submit<br></button>
      <p style="color: red; font-size:15px"><br><b> Securty Code has send to your Phone </b></p>
      
    </div>
  </form>


<div>
<?php
unset($_SESSION['code']);
?>
</div>

</html>


