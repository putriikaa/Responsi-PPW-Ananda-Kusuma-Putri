<?php 
include 'header.php';
?>
<link href="css/css_standart.css" rel="stylesheet">
<!-- PRODUK TERBARU -->

<div class="container">
	<h2 style="width: 100%; border-bottom: 2px solid #0000; text-align:center; font-size:28px"><b>Room</b></h2>
	<hr>
    <div class="row">
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM room WHERE id_categories = 'SU001'");
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $price = number_format($row['price_per_night'], 0, ',', '.');
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-img-container text-center">
                    <img src="img/<?= $row['gambar']; ?>" style="width: 250px; height: 250px; object-fit: contain;">
                </div>
                <div class="card-body">
                    <div class="star text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h3 style="text-align: center; font-size: 18px;"><?= $row['room_name']; ?></h3>
                    <div class="product-quantity text-center" style="font-size: 14px;">
                        <span class="quantity-label">Capacity:</span>
                        <span class="quantity-value"> <?= $row['capacity']; ?></span>
                    </div>

                    <div class="product-price text-center" style="font-size: 14px; padding-bottom: 5px;">
                        <span class="price-label">Price:</span>
                        <span class="price-value">$ <?= $price; ?></span>
                    </div>

                    <div class="room-type" style="font-size: 14px; padding-bottom: 5px;">
                        <span class="room-label">Room Type:</span>
                        <span class="room-value"><?= $row['room_type']; ?></span>
                    </div>


                    <div class="product-action d-flex justify-content-center">
                        <form action="wishlist.php" method="POST">
                            <input type="hidden" name="room_name" value="<?= $row['room_name']; ?>">
                            <input type="hidden" name="price_per_night" value="<?= $row['price_per_night']; ?>">
                            <div class="row justify-content-center">
                                <?php if(isset($_SESSION['id_users'])){ ?>
                                <div class="col-md-6 mb-3">
                                    <a href="proses/add.php?produk=<?= $row['id_room']; ?>&id_users=<?= $id_cs; ?>&hal=1" class="btn btn-success btn-block px-4" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                                </div>
                                <?php } else { ?>
                                <div class="col-md-6 mb-3">
                                    <a href="keranjang.php" class="btn btn-success btn-block px-4" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang</a>
                                </div>
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
        <?php 
            }
        } else {
            echo "Error executing the query: " . mysqli_error($conn);
        }
        ?>
    </div>
</div>

<?php 
include 'footer.php';
?>
