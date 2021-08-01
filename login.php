<?php
session_start();
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$conn = new mysqli('localhost','root','','api');
$s="select * from register where Email='$Email' && Password='$Password'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num == 1)
    { 
        $_SESSION['Email']=$Email;
        header('location:view.php');
    }
else
    {
        header('location:valid.html');
    }
?>