<?php

/**
* 
*/
class USER 
{
	private $db;
	
//Constructor
	function __construct($DBcon)
	{
		$this->db=$DBcon;
	}


//Login 
	function login($name,$email,$pass)
	{
		try {

$stmt=$this->db->prepare("SELECT * from register WHERE name=:uname");
$stmt->execute(array(':uname'=>$name));
$data_row=$stmt->fetch(PDO::FETCH_ASSOC);


if($stmt->rowCount()>0)
{
	if(password_verify($pass,$data_row['password']))
{

	return true;
}

}		
		}

		catch (PDOException $e) {
			echo $e->getMessage();
			
		}
	}

//Signup
	function signup($name,$email,$password,)
	{

try {


$new_password = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
$stmt=$this->db->prepare("INSERT into register(name,email,password,) VALUES(:name ,:email, :pass )");

if($stmt->execute(array(':name'=>$name , ':pass'=>$new_password, ':email'=>$email)))
{
	return $stmt;
}

} catch (PDOException $e)
 {
	echo $e->getMessage();
}


	}

}
?>