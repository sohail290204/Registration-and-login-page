
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
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

h1{
  text-align: center;
  color: rgb(93, 181, 10);
  border: 10px;
  margin: 20px;
  font-size: 40px;
  text-shadow: 3px 3px black;
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


.imgcontainer {
  text-align: center;
  margin: 40px 20px 20px 0;
}

img.avatar {
  width: 15%;
  border-radius: 90%;
  border: 1.5px solid black;
}

.box{
  padding: 10px;
  color: white;
  text-align: center;
  border-radius: 5%;
  text-align: center;
  background: #191919;
  width:600px;
  height: 550px;
  transform: translate(24%,5%);
  transition: 0.5s;
  opacity: 83%;
}

body{
    background: url('./background4.jpg');
    background-size: cover;
    text-align: center;
}
p{
  font-size: 13px;
  text-shadow: 1px 1px black;
}
.box1{
  padding:0px;
}


</style>
</head>
<body>


 <form class=box action="connect2.php"  method="post">
  <h1> <b> Login Form </b></h1>
    <div class="imgcontainer">
      <img src="image.jpg" alt="Avatar" class="avatar">
    </div>

    <div class=box1>
        

        <label for="uname"><b>Username <span>*</span></b></label>
        <br>
        <input type="text" placeholder="Enter Username" name="username" required>
        <br>
       <label for="psw"><b>Password <span>*</span></b></label>
       <br>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <button type="submit">Login</button>
        <p class="msg" > New User? <a href="registerform.php" target='_blank'> Register</a> </p>
   
   </div>
  </form>

</body>
</html>
