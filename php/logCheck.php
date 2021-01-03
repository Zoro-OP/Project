<?php
	session_start();
	require_once('../db/db_Connect.php');
	

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else{			
			$type=validate($username,$password);
			if($type=='Admin')
			{$_SESSION['status']  = "Ok";
				setcookie('uname',$username, time()+3600, '/');

				header('location: ../views/moderatorSearch.php');
		    }
		    
		    if($type=='null')
		    {
				header('location: ../views/login.php?error=yes');
		    }		
		}

	}else{
		header("location: login.html");
	}

?>