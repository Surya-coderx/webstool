<?php
session_start();
 if(isset($_SESSION["user_id"])){
    $mysqli= require __DIR__ . "/database.php";
    $sql= "SELECT* FROM user
            WHERE id={$_SESSION["user_id"]}";
    $result = $mysqli->query ($sql);

    $user=$result->fetch_assoc();
 }

?>
<html>
    <head> <link rel="stylesheet" href="stylesheet.css">
</head>
<body>


    <?php  if (isset($user)):?>
        <p class="downs">YOU LOGGED IN </p>
        <div class="headdd">
        <a href="logout.php">LOGOUT</a>
         <a href="home.php">HOME</a></div>
    <?php else: ?>
        <h1 class="ups">CREATE ACCOUNT</h1>
        <div class="headdd">
            <a href="login.php">login</a>
            <a href="registration.html">registration</a>
            <a href="adminlogin.php">Admin</a>
   
    </div>
                                
   
        
    <?php endif; ?>

        
    
    
</body>
</html>
    
    
    
    