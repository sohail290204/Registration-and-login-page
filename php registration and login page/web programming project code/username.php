<html>
<style>

  body {
    background: url('./background3.jpg');
    background-size: 970px 525px;
    text-align: center;
    background-repeat: none;
    font-family: Arial, Helvetica, sans-serif;
  }
  
input[type=text], input[type=password] {
 width: 50%;
 padding: 12px 10px;
 margin: 8px 0;
 display: inline-block;
 border: 2px solid blue;
 box-sizing: border-box;
 text-align: center;  
 background: none;
 border-radius: 24px;
 color: yellow;
}

  .box{
  padding:20px;
  color: white;
  text-align: center;
  border-radius: 8%;
  background: #191919;
  width:600px;
  height: 300px;
  transform: translate(24%,5%);
  transition: 0.5s;
  opacity: 80%;
  
}
.box input[type=text]:focus, input[type=password]:focus {
  width: 60%;
  border-color: 10px solid green;
}
button:hover{
  background-color: green;
  color:white; 
}
button {
  background-color: #ff0707;
  color: white;
  padding: 10px 21px;
  margin: 8px 0;
  border: 1.5px solid blue;
  cursor: pointer;
  width: 30%;
  border-radius: 24px;
  transition: 0.02s;
  
}

h1{
  text-align: center;
  color: rgb(93, 181, 10);
  border: 5px;
  margin: 3px;
  font-size: 40px;
  text-shadow: 3px 3px black;
}
</style>

<body>
  <form class=box action="username2.php" method="post">
    <div class="container">
      <br>
      <br>
      <h1> Enter your Username</h1>
      <br>
      <br>
      <input type="text" placeholder="Username" name="username" required>
      <br>
      <button type="submit">Submit<br></button>


    </div>
  </form>


</html>
</body>