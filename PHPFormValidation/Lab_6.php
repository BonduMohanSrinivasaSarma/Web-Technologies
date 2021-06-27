<html>
    <style>
        
    </style>
    <link rel="stylesheet" href="styles.css">
    <script>
        function Val()
        {
            $i++;
        }
    </script>
    <body style="background-color: rgb(130, 209, 240);">
        
    </body>
</html>

<?php
$a=array("1.Who is making the Web standards?","2. What does PHP stand for? ","3.Which of these used to add link to  element?","4. What is the font-size of the h1 heading tag?","5. How many heading tags there in HTML5?");
$b=array("Microsoft","Mozilla","Safari","WWC","Pre Hypertext Processor","Hypertext Preprocessor","Processor Hypertext","Processor Hyperform","link","ref","href","newref","3.5 em","2.17 em","2 em","1.5 em","2","3","5","6");
echo '<h1 style="text-align:center">QUIZ</h1>
<div class="div2"><table><tr><td>Name:</td><td>'.$_POST['Name'].'</td></tr><tr><td>Email:</td><td>'.$_POST['Email'].'</td></tr><tr><td>Phone no:</td><td>'.$_POST['Phone'].'</td></tr></table></div>';
$i=0;
$k1=1;
echo '<div style="margin-top:200px"></div>';
while($i<count($a))
{
    $j=($i+1)*4;
   echo '<form action="Answer.php" method="POST">';
   echo '<div class="ss4"; id="hi" style="width:600px; "><h2 style="font-size:29px">'.$a[$i].'</h2>
   <p style="font-size:30px">
   <input type="radio" id="male" name="Option'.$i.'" value="A" style="margin-down:5px">
   <label for="Option1">'.$b[$j-4].'</label><br>
   <input type="radio" id="female" name="Option'.$i.'" value="B" style="margin-down:5px">
   <label for="Option2">'.$b[$j-3].'</label><br>
   <input type="radio" id="other" name="Option'.$i.'" value="C" style="margin-down:5px">
   <label for="Option3">'.$b[$j-2].'</label><br>
   <input type="radio" id="other" name="Option'.$i.'" value="D" style="margin-down:5px">
   <label for="Option4">'.$b[$j-1].'</label>
   </p>
   <div style="padding-top:20px"></div>
   </div>'; 
   
   $i++;
  
}
echo '<input type="submit" class="but" style="margin-left:700px" value="Submit" name="pp"></form>';
echo '</div>
    <div style="padding-top: 120px;"></div>

  <div style="background-color: beige;">
    <footer style="text-align: center;">
        <summary style="color: rgb(218, 106, 26); font-size: 22px;"><b>By B.Mohan Srinivasa Sarma 19BCN7015</b></summary>
     </footer>
</div>'
?>