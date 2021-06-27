<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '','lab_9');
if(!$connection)
echo "Connection is not Successful";
if(isset($_POST['Ifmd']))
{
    $r=$_POST['Regnum'];
    $r1=$_POST['Semno'];
    $r2=$_POST['cat'];
    $r3=$_POST['sbc'];
    $r4=$_POST['mks'];
    if($r!="null" && $r1!="null" && $r2!="null"){
    $query="SELECT * FROM marks WHERE RegisterNumber='$r' AND Subcode='$r3' AND CatNO=$r2 AND Semester=$r1 ";
    $ans=mysqli_query($connection,$query) or die(mysqli_error($connection));
    $count=mysqli_num_rows($ans);
    if($count>0)
    {
    $query="UPDATE marks SET Mark = $r4 WHERE marks.RegisterNumber='$r' AND marks.SubCode='$r3' AND marks.CatNO=$r2 AND marks.Semester=$r1";
    mysqli_query($connection,$query);
    $_SESSION['suces']="Successfully Updated";
    }
    else
    {
        $_SESSION['error']="The details of student does not exist in marks database to update.<br> Please insert the details to update";   
    }
}
else
{
    $_SESSION['error']="Please enter the details";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Update</title>
</head>
<body class="bg">
<input type="button" value="Home" class="but1" style="float:right" onclick="location.href='index.php'"><br><br>
    <h1 class="h1d">Update Marks</h1>
    <p>Update Marks by entering data in the fields</p>
    <div style="padding-top: 40px;"></div>
    <form name="Iform" method="POST" style="font-size: 23px;"> 
        <table class="tlb">
        <tr><td><label for="Regno">Registration Number &nbsp;</label></td>
        <td>
        <?php
        $query = $connection->query("SELECT DISTINCT * FROM studentinfo"); 
        echo '<select  name="Regnum" style="font-size:22px">';
         echo '<option value="null" class="cl">Registration Number</option>';
        while ($row =mysqli_fetch_array($query)) 
        {
            echo '<option value="'.$row['RegisterNumber'].'">'.$row['RegisterNumber'].'</option>\n';
        } 
        echo '</select>';
        ?>
        </td></tr>
        <tr><td><label for="Sem">Semester</label></td>
        <td>
        <?php
        $row=array(1,2,3,4,5,6,7,8);
        echo '<select  name="Semno" style="font-size:22px; margin-left:auto; width:225px">';
         echo '<option value="null">Semester</option>';
         $i=0;
        while ($i<count($row)) 
        {
            echo '<option value="'.$row[$i].'">'.$row[$i].'</option>';
            $i++;
        } 
        echo '</select>';
        ?></td></tr>
        <tr><td><label for="cat">CatNO</label></td>
        <td>
        <select  name="cat" style="font-size:22px;width:225px; margin-left:auto">
        <option value="null" class="cl">Cat No</option><option value="1">1</option><option value="2">2</option><option value="3">3</option>
        </select>
        </td></tr>
        <tr><td><label for="sub">Subject Code</label></td><td><input type="text" name="sbc" size="15" id="nis" style="font-size: 22px;" placeholder="Subject code" required></td></tr>
        <tr><td><label for="mk">Marks</label></td><td><input type="number" name="mks" size="20"  max="50" min="0" id="kis" style="font-size: 22px;" placeholder="Marks" required></td></tr>
        <tr><td><input type="submit" class="but1" style="margin-left:auto" value="Submit" name="Ifmd"></td><td><input type="reset" class="but1" style="margin-left:auto" value="Reset" name="Ifmd"></td></tr>
        </table>
    </form>
    <?php
      if(isset($_SESSION['error']))
      echo '<p style="color:red;">'.$_SESSION["error"].'</p>';
      unset($_SESSION["error"]);
      if(isset($_SESSION['suces']))
      echo '<p style="color:darkgreen;">'.$_SESSION["suces"].'</p>';
      unset($_SESSION["suces"]);
    ?>
</body>
<div style="padding-top: 278px;"></div>
  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>
</html>