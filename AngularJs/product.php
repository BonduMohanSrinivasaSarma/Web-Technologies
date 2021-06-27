<?php
$connection = mysqli_connect('localhost','root','');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'lab10');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$query = "SELECT * FROM product";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));


$outp = "";

while($rs = mysqli_fetch_assoc($result)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"pid":"'.$rs["pid"].'",';
  $outp .= '"pname":"'.$rs["pname"].'",';
  $outp .= '"cost":"'.$rs["cost"].'",';
  $outp .= '"category":"'. $rs["category"]. '"}';
 
}
$outp ='{"records":['.$outp.']}';
mysqli_close($connection);

echo($outp);

?>