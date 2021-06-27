<?php // upload.php 
session_start(); 
echo "
<html><head><title>PHP Form Upload</title></head><body style='background-color:skyblue'>    
<form method='post' action='upload.php' enctype='multipart/form-data'>
Enter Employee id:<input type='text' name='eid' size='10' required><br><br>
Select File: <input type='file' name='filename' size='10'>   
<input type='submit' name='kil' value='Upload'></form><form method='post' action='upload.php'><input type='submit' name='hi' value='view all'></form>";

if(!isset($_SESSION['photo']))
@$_SESSION['photo']=$_POST['eid'];


if ($_FILES)  
{   
$name = $_FILES['filename']['name'];    
move_uploaded_file($_FILES['filename']['tmp_name'], $name);  
$k=$_POST['eid'];
if(!isset($_POST['hi']))
echo "Uploaded image '$name. by $k'<br>";
echo "<img src='$name'>";  
}

if(isset($_POST['hi']))
{
    echo "Uploaded by ". $_SESSION['photo']."<br>";
    $files = glob("*.*");
    for ($i=0; $i<count($files); $i++)
    {   
        $image = $files[$i];
        $supported_file = array('gif','jpg','jpeg','png');
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if(in_array($ext, $supported_file)) 
        {
            echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
            echo '<img src="'.$image.'" alt="Random image" />'."<br /><br />";
        } 
        else 
        {
            continue;
        }
    }
}

echo "</body></html>"; ?> 

 

