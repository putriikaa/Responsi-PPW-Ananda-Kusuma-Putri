<?php 
	session_start();
	unset($_SESSION['users']);
	unset($_SESSION['id_usrs']);
	header('location:../user_login.php');
 ?>