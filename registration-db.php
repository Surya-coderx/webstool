<?php
//variables declaration
$uname=$_POST['uname'];
$eid=$_POST['eid'];
$psw=$_POST['psw'];
//database connection
$servername="localhost";
$usernmae="root";
$password="";
$dbname="webstool";
$conn = new mysqli($servername,$usernmae,$password,$dbname);
$sql="INSERT INTO `userlogin`(`username`, `email`, `password`) VALUES ('$uname','$eid','$psw');";
if($conn->query($sql)==TRUE){
    echo "<script> alert('data inserted'); </script>";
}
else{
    echo "<script> alert('data is not inserted'); </script>";
}
?>