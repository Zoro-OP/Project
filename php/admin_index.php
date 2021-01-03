<?php
	session_start();
	$xml=simplexml_load_file("../xml/users.xml");
	$users = $xml->user;
	$flag=false;
	if( (isset($_POST['password']) )&&(isset($_POST['username']))){
			foreach($users as $user){
		if( $user->username == $_POST['username'] && $user->password == $_POST['password'] ){
	$flag=true;


	$_SESSION['logged_in'] = true;
  $_SESSION['username'] = $_POST['username'];
	$_SESSION['type'] = (string)$user->type;


	}
}
}

	if($flag){
	#		var_dump($_SESSION);
	if(($_SESSION["type"]=="users"  )){
	header("Location: ../html/Home Page.php");}
	if(($_SESSION["type"]=="moderator"  )){
	header("Location: ../html/ModeratorPanel.php");}
	if(($_SESSION["type"]=="Admin"  )){
	header("Location: ../html/Admin_panel.php");}

	}else{
		if( (isset($_POST['password']) )&&(isset($_POST['username']))){
		echo "Invalid credentiails";
	}
	else{ echo "Provide credentials.";}
	}
?>