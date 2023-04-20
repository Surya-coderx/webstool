<?php
session_start();
if(isset($_SESSION['name'])){
}
else{
    if(($_POST['name']=='Admin')&&($_POST['password']=="Admin@2023")){
        $_SESSION['name']=$_POST['name'];
        echo "<script> location.href='admin-view.php' </script>";
    }
    else{
        echo "<script> alert('invalid login') </script>";
        echo "<script> location.href='adminlogin.php' </script>";

    }
}