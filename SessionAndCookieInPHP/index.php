<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lab_8_19BCN7015</title>
    <script>
        function showpass()
        {
            var x = document.getElementById("jis");
            if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
            }
        }
    </script>
</head>

<body class="bg">
    <h1 class="h1d">Online Shopping</h1>
    <div class="div1">
        <h1 class="inf">User Login</h1>
    <form name="Regform" method="POST" style="font-size: 23px;"> 
        <table class="tlb">
        <tr><td><label for="Name">User Name:</label></td><td><input type="text" name="UName" size="28" style="font-size: 22px;" placeholder="19xxx####" required></td></tr>
        <tr><td><label for="Password">Password:</label></td><td><input type="password" name="Password" size="28" id="jis" style="font-size: 22px;" placeholder="Password" required></td></tr>
        <tr><td></td><td><input type="checkbox" onclick="showpass()">Show Password</td></tr>
        <tr><td> <input style="margin-left: auto;" type="reset" value="Reset" class="but"></td><td> <input style="margin-left: 100px;" type="submit" value="Submit" name="ki" class="but"></td></tr>
        </table>
    </form>

    <p id="err" style="color: red; font-size:20px; text-align:center"></p>

    </div>
    <div style="padding-top: 200px;"></div>
  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>
</body>
</html>

<?php
if(isset($_POST['ki']))
{
Check();

}

function Check()
{
    $userinfo=array("19BCN7015"=>"html","19BCD1234"=>"css","19BME1321"=>"php");
    if(!empty($userinfo[$_POST['UName']]) && $_POST['Password']==$userinfo[$_POST['UName']])
    {
        $_SESSION["logindetails"]=$_POST["UName"];
        header("location:view.php");
        exit();
    }
    $_SESSION['error']="Invaild User Name or Password.";
}
if(isset($_SESSION['error']))
echo "<script> document.getElementById('err').innerHTML='Invalid usename or password'; </script>";

unset($_SESSION["error"]);

?>

