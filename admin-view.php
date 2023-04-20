<?php 
include("session.php")
?><html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
    <body>
  <header>
    
           <button  class="know"> <a href="admin-logout.php">logout</a> </button>

</header>
        <table border="5" class="content-table">
        <th COLSPAN=2>USER LOGIN</th>
        <tr>
            <TD>USER NAME</TD>
            <TD>EMAIL ID</TD>
       </tr>
                   
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"login_db");
$query="SELECT * FROM `user` ;";
$query_run=mysqli_query($conn,$query);
while($values=mysqli_fetch_array($query_run)){
?>
<tr>
    <td> <?php echo $values['name']; ?></td>
<td> 
    <?php echo $values['email']; ?></td>
</tr>
<?php }
?>
</body>


</html>