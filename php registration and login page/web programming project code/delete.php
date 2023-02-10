<!DOCTYPE html>
<html>
    <style> 
.box{
  padding-top: 60px;
  padding-bottom: 35px;
  color: white;
  font-size: 20px;
  text-align: center;
  border-radius: 10%;
  text-align: center;
  background: #191919;
  width:600px;
  height: 200px;
  transform: translate(24%,5%);
  transition: 0.5s;
  opacity:87%;
}
body{
    background: url('./pass2.webp');
    background-size: cover;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}
form {
  border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
 width: 70%;
 padding: 10px 20px;
 margin: 5px 0;
 display: inline-block;
 border: 2px solid blue;
 box-sizing: border-box;
 text-align: center;  
 background: none;
 border-radius: 24px;
 margin: 20px auto;
 color: yellow;
}
.box input[type=text]:focus, input[type=password]:focus {
  width: 90%;
  border-color: 10px solid green;
}

button:hover{
  background-color: green;
  color:white; 
}
span{
  color: red;
}

button {
  background-color: #ff0707;
  color: white;
  padding: 14px 25px;
  margin: 8px 0;
  border: 1.5px solid blue;
  cursor: pointer;
  width: 30%;
  border-radius: 24px;
  transition: 0.02s;
  
}
</style>
<form class=box action="delete1.php" method="post" >
    <div class=box1>

        <label for="pass"><b>Enter your password<span>*</span></b></label>
        <br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <button type="submit">submit</button>
   </div>
</form>
</html>



