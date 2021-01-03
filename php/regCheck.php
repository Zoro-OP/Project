<?php
require_once('../db/db_Connect.php');


if (isset($_POST['submit']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$nid=$_POST['nid'];
	$address=$_POST['address'];
	$area=$_POST['area'];
	$usertype="Admin";
	
	$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'name'=> $name,
				'dob'=>$dob,
				'phone'=>$phone,
				'nid'=>$nid,
				'address'=>$address,
				'area'=>$area,
				'usertype'=>$usertype

			];

	if(!empty($username) && !empty($password) && !empty($confirmpassword) && !empty($name)&& !empty($dob) && !empty($email) && !empty($phone) && !empty($nid)  && !empty($address)  && !empty($area)  && !empty($usertype) )
	{
		if ($password == $confirmpassword)
		{	
			
			$reg=insertUser($user);
			if($reg=='Inserted')
			{
				header("location: ../views/login.php");
			}
			else
			{
				header("location: ../views/register.php?error=insert");
			}	
		}
	}
	else
	{
		echo "invalid";
	}
}	

?>

