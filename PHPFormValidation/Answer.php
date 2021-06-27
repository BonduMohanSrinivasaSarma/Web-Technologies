<?php
$Cor=array('A','B','C','C','D');
$sel=array('Option0','Option1','Option2','Option3','Option4');
$score=0;
for($i=0;$i<5;$i++){
@$sel1=$_POST[$sel[$i]];
if($sel1!=null){
if($sel1==$Cor[$i])
$score++;
}}

echo '<div class="ss5">
<h2>Congratulations</h2>
<p>Your Score is '.$score.'/5</p>
</div>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Marks</title>
</head>
<body class="bg">
<input type="button" class="but" value="Retake Quiz" style="width: 150px; margin-left:auto; margin-right:auto; display:block" onclick="location.href='Lab_6.html'">
</body>
<div style="padding-top: 455px;"></div>

  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>
</html>