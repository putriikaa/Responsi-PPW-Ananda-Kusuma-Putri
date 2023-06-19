<?php 
session_start();
include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($conn, "SELECT * FROM users where username = '$username'");
$jml = mysqli_num_rows($cek);
$row = mysqli_fetch_assoc($cek);

if(count($row)>0){
	(password_verify($password, $row['password']));
		$_SESSION['username'] = $row['nama'];
		$_SESSION['id_users'] = $row['id_users'];
		header('location:../index.php');
}else{
	echo "
	<script>
	alert('USERNAME/PASSWORD SALAH');
	window.location = '../user_login.php';
	</script>
	";
	die;
}

?>