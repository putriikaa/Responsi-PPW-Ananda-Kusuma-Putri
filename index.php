<?php 
include 'header.php';
$conn = mysqli_connect("localhost", "root", "", "hotelbaru");
?>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- DateTimePicker CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
  <!-- Custom CSS -->
  <link href="css/css_index.css" rel="stylesheet">
</head>
  <style>
.header {
  position: relative;
}

.header .image {
  position: relative;
}

.header .booking-form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  text-align: center;
  width: 400px;
  border-radius: 10px;
}

.header .booking-form h2 {
  margin-bottom: 20px;
}

.header .booking-form .form-group {
  margin-bottom: 15px;
}

.header .booking-form .form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.header .booking-form .form-group input,
.header .booking-form .form-group select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.header .booking-form button {
  padding: 8px 20px;
  border: none;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.col-md-6 {
  width: 100%;
  padding: 10px;
}

.about-content {
  text-align: left;
}

.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.description {
  font-size: 16px;
  margin-bottom: 20px;
}

.btn {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

  </style>
</head>
<body>

<header class="header">
  <div class="container-fluid" style="margin: 0;padding: 0;">
    <div class="image" style="margin-top: -21px">
      <img src="img/backg.jpg" style="width: 100%; height: 650px;">
      <div class="booking-form">
        <h2>Book Now</h2>
        <form>
          <div class="form-group">
            <label for="check-in">Check-in Date:</label>
            <input type="text" id="check-in" name="check-in" class="date-picker" required>
          </div>
          <div class="form-group">
            <label for="check-in">Check-out Date:</label>
            <input type="text" id="check-in" name="check-in" class="date-picker" required>
            </div>
          <div class="form-group">
            <label for="capacity">Capacity:</label>
            <select id="capacity" name="capacity" required>
              <option value="1">1 Person</option>
              <option value="2">2 People</option>
              <option value="3">3 People</option>
              <!-- Add more options if needed -->
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Book Now</button>
        </form>
      </div>
    </div>
  </div>
</header>


<br>
<br>
<br>
<br>


<h3 class="index-title"><b>Room Categories</b></h3>
<div class="row">
    <?php 
    $result = mysqli_query($conn, "SELECT room_type, description FROM categories");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-sm-6 col-md-4">
    <div class="card" style="text-align:justify; margin-bottom: 20px; padding: 20px; box-shadow: 0 4px 8px 0 #AAAAAA; transition: 0.3s;">
    <div class="card-body">
        <h3 class="card-title">
            <?php 
            if ($row['room_type'] === 'Standart Room') {
                echo '<i class="fas fa-home"></i> ' . $row['room_type'];
                
            } elseif ($row['room_type'] === 'Deluxe Room') {
                echo '<i class="fas fa-star"></i> ' . $row['room_type'];
            } elseif ($row['room_type'] === 'Suite Room') {
                echo '<i class="fas fa-bed"></i> ' . $row['room_type'];
            } elseif ($row['room_type'] === 'Executive Room') {
                echo '<i class="fas fa-gem"></i> ' . $row['room_type'];
            } elseif ($row['room_type'] === 'Family Room') {
                echo '<i class="fas fa-crown"></i> ' . $row['room_type'];
            } elseif ($row['room_type'] === 'Presidential Room') {
                echo '<i class="fas fa-user-tie"></i> ' . $row['room_type'];
            } else {
                echo $row['room_type'];
            }
            ?>
        </h3>
        <p class="card-text"><?php echo $row['description']; ?></p>
<div class="row">
  <?php if (isset($_SESSION['id_users'])) { ?>
  <?php } else { ?>
    <div class="col-md-6">
    <?php if ($row['room_type'] === 'Standart Room') { ?>
      <a href="standart-room.php" class="btn btn-success btn-block" role="button" style="background-color:#4196bd"><i"></i> Lihat Produk</a>
      <?php } elseif ($row['room_type'] === 'Deluxe Room') { ?>
        <a href="deluxe-room" class="btn btn-success btn-block" role="button" style="background-color:#AAAAAA;color:#fff;"><i class="bi bi-eye"></i> Lihat Produk</a>
      <?php } elseif ($row['room_type'] === 'Suite Room') { ?>
        <a href="suite-room.php" class="btn btn-success btn-block" role="button" style="background-color:#AAAAAA;color:#fff;"><i class="bi bi-eye"></i> Lihat Produk</a>
      <?php } elseif ($row['room_type'] === 'Executive Room') { ?>
        <a href="executive-room.php" class="btn btn-success btn-block" role="button" style="background-color:#AAAAAA;color:#fff;"><i class="bi bi-eye"></i> Lihat Produk</a>
      <?php } elseif ($row['room_type'] === 'Family Room') { ?>
        <a href="family-room.php" class="btn btn-success btn-block" role="button" style="background-color:#AAAAAA;color:#fff;"><i class="bi bi-eye"></i> Lihat Produk</a>
      <?php } elseif ($row['room_type'] === 'Presidential Room') { ?>
        <a href="presidential-room.php" class="btn btn-success btn-block" role="button" style="background-color:#AAAAAA;color:#fff;"><i class="bi bi-eye"></i> Lihat Produk</a>
      <?php } else { ?>
        <a href="standart-room.php" class="btn btn-success btn-block" role="button" style="background-color:#AAAAAA;color:#fff;"><i class="bi bi-eye"></i> Lihat Produk</a>
      <?php } ?>
    </div>
  <?php } ?>
</div>

            </div>
        </div>
    </div>
    <?php 
    }
    ?>
</div>
</div>
</div>
<br>
<br>
<br>
<br>

<script>
  $(document).ready(function() {
    $('.date-picker').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minDate: moment().startOf('day'),
      autoApply: true,
      locale: {
        format: 'YYYY-MM-DD'
      }
    });
  });

  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Menghentikan pengiriman form secara default

    // Menampilkan notifikasi
    alert('Anda telah berhasil mendapatkan kamar.');
  });
</script>




</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="script.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.1.16/jquery.backstretch.min.js"></script>
<?php 
include 'footer.php';
?>