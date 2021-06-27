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
    <title>View Products</title>
</head>
<body class="bg">
<input type="button" value="Logout" class="but" style="float: right; margin-right:10px" onclick="location.href='logout.php'">
<input type="button" value="View Cart" style="float: right; margin-right:20px" class="but" onclick="location.href='cart.php'">
    <?php
   echo '<h2 class="h1d" style="padding-top:20px; padding-left:310px">Welcome, '.$_SESSION["logindetails"].'</h2>'
    ?>
    <h1 class="h1d">Buy Now</h1>
    <form method="POST">
    <table class="tlb">
        <tr align="center">
            <td style="align-items:center"><img src="https://static.digit.in/product/97036a3ef3b60f99a34cf0e16fb867896146a6e2.jpeg?tr=w-1200" width="300px" height="300px">
            <p>Oneplus<br>Rs.40000</p><input type="text" id="a1" readonly style="width: 20px; font-size:22px;text-align:center" value="0"><br><input value='+'  name='add1' class="but1" type='submit'>
            <input class="but" value="Add to Cart" type="submit" name="button1" style="margin-left: auto;">
            <input value='-' name='less1' class="but1" type='submit'>
        </td>
            <td style="padding-left: 100px;"><img src="https://www.gizmochina.com/wp-content/uploads/2019/09/Apple-iPhone-11-1-500x500.jpg" width="300px" height="300px">
            <p>Apple Iphone<br>Rs.80000</p><input type="text" id="a2" readonly style="width: 20px; font-size:22px;text-align:center" value="0"><br><input value='+' name='add2' class="but1" type='submit'>
            <button class="but" name="button2" style="margin-left: auto;">Add to Cart</button>
            <input value='-' name='less2' class="but1" type='submit'>
        </td>
            <td style="padding-left: 100px;"><img src="https://ampro.in/wp-content/uploads/2019/09/samsung-a10s-green-4.jpg" width="300px" height="300px">
            <p>Samsung<br>Rs.30000</p><input type="text" id="a3" readonly style="width: 20px; font-size:22px;text-align:center" value="0"><br><input value='+' name='add3' class="but1" type='submit'>
            <button class="but" name="button3" style="margin-left: auto;">Add to cart</button>
            <input value='-' name='less3' class="but1" type='submit'>
        </td>
        </tr>
    </table>
    <form method="POST">
    <table class="tlb" style="padding-top: 35px;">
        <tr align="center">
            <td style="align-items:center"><img src="https://static.bhphoto.com/images/images2500x2500/1598464243_1584034.jpg" width="300px" height="300px">
            <p>Asus<br>Rs.50000</p><input type="text" id="a4" readonly style="width: 20px; font-size:22px;text-align:center" value="0"><br><input value='+' name='add4' class="but1" type='submit'>
            <button class="but" name="button4" style="margin-left: auto;">Add to cart</button>
            <input value='-' name='less4' class="but1" type='submit'>
        </td>
            <td style="padding-left: 100px;"><img src="https://www.bhphotovideo.com/images/images2500x2500/acer_nx_hs5aa_004_aspire_3_core_i5_1035g1_1566184.jpg" width="300px" height="300px">
            <p>Acer<br>Rs.60000</p><input type="text" id="a5" readonly style="width: 20px; font-size:22px;text-align:center" value="0"><br><input value='+' name='add5' class="but1" type='submit'>
            <button class="but" name="button5" style="margin-left: auto;">Add to Cart</button>
            <input value='-' name='less5' class="but1" type='submit'>
        </td>
            <td style="padding-left: 100px;"><img src="https://images-na.ssl-images-amazon.com/images/I/41NvMZxjbKL.jpg" width="300px" height="300px">
            <p>Dell<br>Rs.70000</p><input type="text" id="a6" readonly style="width: 20px; font-size:22px;text-align:center" value="0"><br><input value='+' name='add6' class="but1" type='submit'>
            <button class="but" name="button6" style="margin-left: auto;">Add to Cart</button>
            <input value='-' name='less6' class="but1" type='submit'></td>
        </tr>
    </table>
    </form>
    <div style="padding-top: 60px;"></div>
  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>
</body>
</html>
<?php
 $_SESSION['Cost'][0]=40000;
 $_SESSION['Cost'][1]=80000;
 $_SESSION['Cost'][2]=30000;
 $_SESSION['Cost'][3]=50000;
 $_SESSION['Cost'][4]=60000;
 $_SESSION['Cost'][5]=70000;

if(isset($_POST['button1']) || isset($_POST['add1']))
$_SESSION['counter0']++;
if(isset($_POST['button2']) || isset($_POST['add2']))
$_SESSION['counter1']++;
if(isset($_POST['button3']) || isset($_POST['add3']))
$_SESSION['counter2']++;
if(isset($_POST['button4']) || isset($_POST['add4']))
$_SESSION['counter3']++;
if(isset($_POST['button5']) || isset($_POST['add5']))
$_SESSION['counter4']++;
if(isset($_POST['button6']) || isset($_POST['add6']))
$_SESSION['counter5']++;

if(isset($_POST['less1']) && $_SESSION['counter0']>0)
$_SESSION['counter0']--;
if(isset($_POST['less2']) && $_SESSION['counter1']>0)
$_SESSION['counter1']--;
if(isset($_POST['less3']) && $_SESSION['counter2']>0)
$_SESSION['counter2']--;
if(isset($_POST['less4']) && $_SESSION['counter3']>0)
$_SESSION['counter3']--;
if(isset($_POST['less5']) && $_SESSION['counter4']>0)
$_SESSION['counter4']--;
if(isset($_POST['less6']) && $_SESSION['counter5']>0)
$_SESSION['counter5']--;

echo '<script>
document.getElementById("a1").value='.@$_SESSION['counter0'].';
document.getElementById("a2").value='.@$_SESSION['counter1'].';
document.getElementById("a3").value='.@$_SESSION['counter2'].';
document.getElementById("a4").value='.@$_SESSION['counter3'].';
document.getElementById("a5").value='.@$_SESSION['counter4'].';
document.getElementById("a6").value='.@$_SESSION['counter5'].';


</script>';
?>