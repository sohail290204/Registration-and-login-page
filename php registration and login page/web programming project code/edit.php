<!DOCTYPE html>
<html>
<style>

  body {
    background: url('./background5.webp');
    background-size: 970px 480px;
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
  padding: 10px;
  color: white;
  text-align: center;
  border-radius: 5%;
  text-align: center;
  background: #191919;
  width:600px;
  height: 200px;
  transform: translate(24%,5%);
  transition: 0.5s;
  opacity: 83%;
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
</style>

<body>
  <form class=box action="edit1.php" method="post">
    <div class="container">
      <br>
      <label for="name">Enter Name you want to change</label>
      <br>
      <input type="text" placeholder="Name" name="name" >
      <br>
      <button type="submit">Submit<br></button>
      <br>

    </div>
  </form>



</html>