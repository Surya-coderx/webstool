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
            <h2 >Admin Login</h2>
            <form action="session.php" method="post">
                <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="text" name="name"  required>
                <label> ADMIN NAME</label>
            </div>
             <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id ="password" required>
                    <label>password</label>
             </div>
             <div class="remeber-me ">
                <label ><input type="checkbox">REMEMBER ME</label>
                <a href="#">forgot password</a>
             </div>
             <button type="submit" class="logbut" >LOGIN <a href="roadmap.html"> </a> </button>
 
            </DIV>
            </form>
    </div>   
    <script src="script.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>