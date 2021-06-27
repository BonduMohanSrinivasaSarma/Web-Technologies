<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '','lab_9');
if(!$connection)
echo "Connection is not Successful";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>View Marks</title>
    <style>
        th
        {
            color:black;
            font-weight: bold;
            width: 200px;
            background-color: blanchedalmond;
            font-size: 22px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        td{
            padding-top: 3px;
            font-size: 22px;
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body class="bg">
    <input type="button" value="Home" class="but1" style="float:right" onclick="location.href='index.php'"><br><br>
    <h1 class="h1d">Display Marks</h1>
    <p>Display Marks by entering data in the fields</p>
    <div style="padding-top: 40px;"></div>
<form name="Iform" method="POST" style="font-size: 23px;"> 
        <table class="tlb">
        <tr><td align="left"><label for="Regno">Registration Number</label></td>
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
         echo '<option value="null">Semester</option><option value="all">All</option>';
         $i=0;
        while ($i<count($row)) 
        {
            echo '<option value="'.$row[$i].'">'.$row[$i].'</option>';
            $i++;
        } 
        echo '</select>';
        ?></td></tr>
        
        <tr><td><input type="submit" class="but1" style="margin-left:auto" value="Submit" name="Ifmd"></td><td><input type="reset" class="but1" style="margin-left:auto" value="Reset" name="Ifmd"></td></tr>
        </table>
    </form>

    <?php
      if(isset($_POST['Ifmd']))
      {
          $r=$_POST['Regnum'];
          $r1=$_POST['Semno'];
          
          if($r!="null" && $r1!="null")
           {
              if($r1=="all")
              $query="SELECT * FROM marks WHERE RegisterNumber='$r' ORDER BY Semester DESC";
              else
              $query="SELECT * FROM marks WHERE RegisterNumber='$r' AND Semester=$r1 ORDER BY Semester DESC" ;
              $ans=mysqli_query($connection,$query) or die(mysqli_error($connection));
              if(mysqli_num_rows($ans)>0){
              echo '<div style="padding-top:80px"></div>';
              echo "<table style='margin-left:auto;margin-right:auto;text-align:center'><tr><th>Register Number</th><th>Semester</th><th>CatNo</th><th>Subject Code</th><th>Marks</th><tr>";
              while($row=mysqli_fetch_array($ans))
              {
                  echo "<tr><td>".$row['RegisterNumber']."</td><td>".$row['Semester']."</td><td>".$row['CatNO']."</td><td>".$row['SubCode']."</td><td>".$row['Mark']."</td><tr>";
              }
              echo "</table>";
              }
            else
            {
                $_SESSION['error']='The requested details are not available';
            }
          }
          else
          {
            $_SESSION['error']='Please enter details';
          }
          if(isset($_SESSION['error']))
            echo '<p style="color:red;">'.$_SESSION["error"].'</p>';
            unset($_SESSION["error"]);
          
      }
      ?>
</body>
<div style="padding-top: 378px;"></div>
  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>
</html>