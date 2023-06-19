<?php 
include 'header.php';
if(isset($_POST['submit1'])){
	$id_wishlist = $_POST['id'];
	$total = $_POST['total'];

	$edit = mysqli_query($conn, "UPDATE wishlist SET total = '$total' where id_wishlist = '$id_wishlist'");
	if($edit){
			echo "
		<script>
		alert('KERANJANG BERHASIL DIPERBARUI');
		window.location = 'wishlist.php';
		</script>
		";
	}
}else if(isset($_GET['del'])){
	$id_wishlist = $_GET['id'];
	$del = mysqli_query($conn, "DELETE FROM wishlist WHERE id_wishlist = '$id_wishlist'");
	if($del){
		echo "
		<script>
		alert('1 PRODUK DIHAPUS');
		window.location = 'wishlist.php';
		</script>
		";
	}
}

?>

<div class="container" style="padding-bottom: 300px;">
	<center><h2 style=" width: 100%; border-bottom: 4px solid #ff8680"><b>Wishlist</b></h2></center>
		<table class="table table-striped">
			<?php 
			if(isset($_SESSION['users'])){
				$id_users = $_SESSION['id_users'];
			// CEK JUMLAH KERANJANG
				$cek = mysqli_query($conn, "SELECT * FROM wishlist WHERE id_wishlist = '$id_users'");
				$jml = mysqli_num_rows($cek);

				if($jml > 0){
					?>	
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Image</th>
							<th scope="col">Nama</th>
							<th scope="col">Harga</th>
							<th scope="col">Qty</th>
							<th scope="col">SubTotal</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<?php 
					if(isset($_SESSION['id_users'])){
						$id_users = $_SESSION['id_users'];

						$result = mysqli_query($conn, "SELECT k.id_wishlist as wishlist, k.id_room as kd, k.room_name as nama, k.total as jml, , p.price_per_night as hrg FROM wishlist k join room p on k.id_room=p.id_room WHERE id_users = '$id_users'");
						$no = 1;
						$hasil = 0;
						while($row = mysqli_fetch_assoc($result)){
				
					?>
					<tbody>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<input type="hidden" name="id" value="<?php echo $row['wishlist']; ?>">
						<tr>
							<th scope="row"><?= $no;  ?></th>
							<td><img src="img/room/<?= $row['gambar']; ?>" width="100"></td>
							<td><?= $row['nama']; ?></td>
							<td>Rp.<?= number_format($row['price_per_night']);  ?></td>
							<td><input type="number" name="total" class="form-control" style="text-align: center;" value="<?= $row['total']; ?>"></td>
							<td>Rp.<?= number_format($row['price_per_night'] * $row['total']);  ?></td>
							<td><button type="submit" name="submit1" class="btn btn-warning">Update</button> | <a href="wishlist.php?del=1&id=<?= $row['wishlist']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus ?')">Delete</a></td>
						</tr>
						</form>
					<?php 
							$sub = $row['price_per_night'] * $row['total'];
							$hasil += $sub;
							$no++;
						}
					}
					 ?>
					 
						<tr>
							<td colspan="7" style="text-align: right; font-weight: bold;">Grand Total = Rp.<?= number_format($hasil); ?></td>
						</tr>
						<tr>
							<td colspan="7" style="text-align: right; font-weight: bold;"><a href="index.php" class="btn btn-success">Lanjutkan Belanja</a> <a href="checkout.php?id_users=<?= $id_users; ?>" class="btn btn-primary">Checkout</a></td>
						</tr>
						<?php 
					}else{
						echo "
						<tr>
						<th scope='col'>No</th>
						<th scope='col'>Image</th>
						<th scope='col'>Nama</th>
						<th scope='col'>Harga</th>
						<th scope='col'>Qty</th>
						<th scope='col'>SubTotal</th>
						<th scope='col'>Action</th>
						</tr>
						<tr>
						<td colspan='7' class='text-center bg-warning'><h5><b>KERANJANG BELANJA ANDA KOSONG </b></h5></td>
						</tr>

						";
					}

				}else{
					echo "<tr>
					<td colspan='7' class='text-center bg-danger'><h5><b>SILAHKAN LOGIN TERLEBIH DAHULU SEBELUM BERBELANJA</b></h5></td>
					</tr>";
				}
				?>


			</tbody>
		</table>
	
</div>




<?php 
include 'footer.php';
?>