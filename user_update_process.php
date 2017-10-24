<?php 



require 'connect_db.php';

	$id = $_GET['id'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	$nickname = $_GET['nickname'];

	echo $id;
	echo $username;
	echo $password;
	echo $nickname;
	
	$sql = "UPDATE user SET username='$username',password='$password',nick_name='$nickname' WHERE id='$id'";
	$result = $connect_db->query($sql);
	
	if($result){
		if(isset($_GET['nickname'])) {
		session_start();
        $_SESSION['username'] = $_GET['nickname'];
    }
		header("location:user_update_success.php");
	}else{
		
		echo "<meta http-equiv='refresh' content='=0;URL=user_update_fail.php' />";
	}







?>