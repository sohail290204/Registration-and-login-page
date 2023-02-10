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

    .box {
        padding-top: 25px;
        padding-bottom: 0px;
        color: yellow;
        text-align: center;
        border-radius: 30%;
        text-align: center;
        background: #191919;
        width: 400px;
        height: 40px;
        transform: translate(24%, 20%);
        opacity: 85%;
    }

    .container {
        background: #14275e;
        width: 600px;
        height: 420px;
        transform: translate(30%, 2%);
        border-radius: 5%;
        opacity: 90%;
    }

    .c1 {
        color: red;
        text-shadow: 1px 1px black;
        font-size: 15px;
        padding-top: 15px;
        text-align: center;
    }

    span {
        color: yellow;
    }

    .material-icons {
        position: absolute;
        top: 161px;
        right: 70px;
    }

    .c2 {
        position: absolute;
        top: 150px;
        right: 0px;
    }
    .c3{
        color: red;
        text-shadow: 1px 1px black;
        font-size: 15px;
       
        text-align: center;
    }

    .hi {
        position: absolute;
        top: 175px;
        right: 65px;
       
    }
    .hii {
        position: absolute;
        top: 337px;
        right: 65px;
    }
</style>

</html>
<html>
<form>
    <div class='container'>
        <p class='hi'>
            <a href="edit.php"><img src="edit3.png" alt="edit" style="width:30px;height:30px;"></a>
        </p>
        <p class='hii'>
            <a href="edit4.php"><img src="edit3.png" alt="edit" style="width:30px;height:30px;"></a>
        </p>
        <?php
        echo "<p class='c1'> <span> * </span> Note: You can't Change your Username and Email <span> * </span></p>";
        echo "<p class='c3'> <span> * </span>  click on edit icon to update details <span> * </span></p>";
        $conn = new mysqli("localhost", "root", "", "project");

        if ($conn->connect_error) {
            die("Fail to connect : " . $conn->connect_error);
        } else {
            session_start();
            $u2 = $_SESSION['us'];

            echo "<p class='box'> Your UserName is: $u2  </p>";
            //echo "<p class='box'> You can not edit your Username </p>";

            $sql = "SELECT Name FROM information WHERE Username='$u2'";
            $data = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($data);
            $n = $result['Name'];
            echo "<p class='box'> Your Name is: $n  </p>";

            $sql = "SELECT Email FROM information WHERE Username='$u2'";
            $data2 = mysqli_query($conn, $sql);
            $result1 = mysqli_fetch_assoc($data2);
            $e = $result1['Email'];
            echo "<p class='box'> Your Email is: $e  </p>";

            $sql = "SELECT Password FROM information WHERE Username='$u2'";
            $data3 = mysqli_query($conn, $sql);
            $result2 = mysqli_fetch_assoc($data3);
            $p = $result2['Password'];
            echo "<p class='box'> Your Password is: $p  </p>";
        }
        ?>
    </div>
</form>

</html>