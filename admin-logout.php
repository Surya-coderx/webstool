<?php
session_start();
if(isset($_SESSION['name'])){
    session_destroy();
    echo '<script> alert("succesfully logout") </script>';
    echo  '<script> location.href("adminlogin.php") </script>';
    
}else{
    echo  '<script> location.href("adminlogin.php") </script>';  
}
?>