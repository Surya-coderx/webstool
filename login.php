<?php

$is_invalid= false;

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $mysqli= require __DIR__. "/database.php";
    $sql=sprintf("SELECT*from user
                   WHERE email='%s'",
                  $mysqli->real_escape_string($_POST["email"] ));
    $result = $mysqli ->query($sql);

   $user= $result->fetch_assoc();

    if($user) {

        if (password_verify($_POST["password"],$user["password_hash"])){

           session_start();

           session_regenerate_id();

           $_SESSION["user_id"] = $user["id"];

           header("Location: index.php");
           exit;
        }
    }
     $is_invalid= true;
}
?>


<html>
<title></title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
    <header>
    
        <h2 class="logo">WEBSTOOL</h2>
    </header>
    <div class="wrap ">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
       <div class="login">
            <h2 >LOGIN</h2>
            <?php if ($is_invalid):?>
                <em>invalid login</em>
                <?php endif;?>
            <form action="#" method="post">
                <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"]?? "") ?>"required>
                <label>Email</label>
            </div>
             <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id ="password"required>
                    <label>password</label>
             </div>
             <div class="remeber-me ">
                <label ><input type="checkbox">REMEMBER ME</label>
                <a href="#">forgot password</a>
             </div>
             <button type="submit" class="logbut" >LOGIN <a href="roadmap.html"> </a> </button>
             <div class="login-register">
                <p> Don't have a account? <a href="registration.html" class="register-link">Register</a></p>
             </div>
 
            </DIV>
            </form>
    </div>   
    <script src="script.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>