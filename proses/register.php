<?php 
include '../koneksi/koneksi.php';
$id = mysqli_query($conn, "SELECT id_users from users order by id_users desc");
$data = mysqli_fetch_assoc($id);
$num = substr($data['id_users'], 1, 4);
$add = (int) $num + 1;
if(strlen($add) == 1){
	$format = "A0000".$add;
}else if(strlen($add) == 2){
	$format = "A000".$add;
}else if(strlen($add) == 3){
	$format = "A00".$add;
}else if(strlen($add) == 4){
	$format = "A0".$add;
}else{
	$format = "A".$add;
}

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$tlp = $_POST['no_telp'];
$konfirmasi = $_POST['konfirmasi'];

$hash = password_hash($password, PASSWORD_DEFAULT);

if($password == $konfirmasi){
	$cek = mysqli_query($conn, "SELECT username from users  where username = '$username'");
	$jml = mysqli_num_rows($cek);
	if($jml == 1){
		echo "
		<script>
		alert('USERNAME SUDAH DIGUNAKAN');
		window.location = '../register.php';
		</script>
		";
		die;
	}

	$result = mysqli_query($conn, "INSERT INTO users VALUES('$format','$username', '$hash', '$tlp', '$nama','$email')");
	if($result){
		echo "
		<script>
		alert('REGISTER BERHASIL');
		window.location = '../user_login.php';
		</script>
		";
	}

}else{
	echo "
	<script>
	alert('KONFIRMASI PASSWORD TIDAK SAMA');
	window.location = '../register.php';
	</script>
	";
}
?>