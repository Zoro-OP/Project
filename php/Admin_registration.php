<?php
require_once('../db/db_Connect.php');


if (isset($_POST['register']))
{
	
	$username=$_POST['username'];
	$name=$_POST['fullname'];
	$email=$_POST['email'];
	$phone=$_POST['phone_no'];
	$nid=$_POST['gender'];
	$address=$_POST['city'];
	
	
	$user = [
				'username'=> $username,
				'email'=> $email,
				'name'=> $name,
				'phone'=>$phone,
				'nid'=>$nid,
				'address'=>$address,
			];

	if(!empty($username)  && !empty($name)&&  !empty($email) && !empty($phone) && !empty($nid)  && !empty($address))
	{	
		//var_dump($user);
		$reg=insertModerator($user);
		header("location: ../views/Admin_ModeratorVerify.php");
	}
	else
	{
		echo "invalid";
	}
}	

?>

