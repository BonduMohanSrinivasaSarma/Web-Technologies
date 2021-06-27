<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cart</title>
    <style>
        th
        {
            width: 160px;
            background-color:rgb(214, 235, 205);
        }
        td
        {
            background-color: honeydew;
        }
        table
        {
            background-color: honeydew;
        }
    </style>
</head>
<body class="bg">
<input type="button" value="Logout" class="but" style="float: right; margin-right:10px" onclick="location.href='logout.php'">
<input type="button" value="View Items" style="float: right; margin-right:20px" class="but" onclick="location.href='view.php'">
    <h1 style="padding-top:25px; padding-left:270px">Cart</h1>
    <form method="post">
        <table style="text-align: center;" class="tlb"><tr style="background-color:bisque;"><th>Product</th><th>Product Price</th><th>Quantity</th><th>Total</th></tr>
        <?php
        $pname=array('Oneplus','IPhone','Samsung','Asus','Acer','Dell');
        $cn=array('counter0','counter1','counter2','counter3','counter4','counter5');
        $sum=0;
        for($i=0;$i<6;$i++)
        {
            if(@$_SESSION[$cn[$i]]>0)
            {
                $sum=$sum+$_SESSION[$cn[$i]]*$_SESSION["Cost"][$i];
                echo "<tr><td>$pname[$i]</td><td>".$_SESSION["Cost"][$i]."</td><td>".@$_SESSION[$cn[$i]]."</td><td>".@$_SESSION[$cn[$i]]*$_SESSION["Cost"][$i]."</td><tr>";
            }
        }
        
        ?>
        </table>
        <?php
        echo "<p style='text-align:center'>-------------------------------------------------------</p>";
        echo "<p style='text-align:center; font-size:26px'>Total Amount: " .$sum."</p>";
        ?>
    </form>
    <div style="padding-top: 430px;"></div>
  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>
</body>
</html>
