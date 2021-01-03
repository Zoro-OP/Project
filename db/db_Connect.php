<?php
	
	$host	= "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$dbname	= "job";

	function dbConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpass;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

	function insertModerator($user){
		$conn = dbConnection();
		echo "Entered";
		if(!$conn){
			echo "DB connection error";
		}

		$sql1="INSERT INTO moderators (`username`, `fullname`,`email`, `phone`, `gender`, `city`) VALUES ('".$user['username']."', '".$user['name']."', '".$user['email']."', '".$user['phone']."', '".$user['nid']."', '".$user['address']."')";
		if(mysqli_query($conn, $sql1)){
			return 'Inserted';
		}
		else
		{
			echo $sql1;
			return 'failed';
		}
	}

	function searchMod($username)
	{
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM moderators where username like '%".$username."%'";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function deleteMod($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM moderators where username='{$user}'";

		if(mysqli_query($conn, $sql)){
			return $sql;
		}else{
			return $sql;
		}
	}

	function insertUser($user){
		$conn = dbConnection();
		echo "Entered";
		if(!$conn){
			echo "DB connection error";
		}

		$sql1="INSERT INTO users (`username`, `name`, `password`, `dob`, `email`, `phone`, `nid`, `type`, `address`, `area`) VALUES ('".$user['username']."', '".$user['name']."', '".$user['password']."', '".$user['dob']."', '".$user['email']."', '".$user['phone']."', '".$user['nid']."', '".$user['usertype']."', '".$user['address']."', '".$user['area']."')";
		if(mysqli_query($conn, $sql1)){
			return 'Inserted';
		}
		else
		{
			echo $sql1;
			return 'failed';
		}
	}

	function validate($username,$password){
		
		$conn = dbConnection();
		$sql = "select * from users where username='".$username."'&& password='".$password."'";
		$result = mysqli_query($conn, $sql);
		$user 	= mysqli_fetch_assoc($result);

		if(!empty($user))
		{
			return $user['type'];
		}
		else
		{
			return 'null';
		}
	}



?>