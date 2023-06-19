
<?php 
	include 'header.php';
 ?>

 <style>

.title-text {
  text-align: center;
  margin-bottom: 30px;
}

.title-text h3 {
  font-size: 24px;
  font-weight: bold;
}

.form-control {
  position: relative;
  margin-bottom: 20px;
}

.form-control input {
  width: 100%;
  padding: 10px 15px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.form-control input[type="text"],
.form-control input[type="password"] {
  padding-left: 35px;
}

.form-control input[type="text"]::before,
.form-control input[type="password"]::before {
  position: absolute;
  content: '\f007';
  font-family: "FontAwesome";
  font-size: 14px;
  color: #aaa;
  left: 10px;
  top: 10px;
}

.btn {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

.btn-main-sm {
  font-size: 16px;
}

@media (min-width: 768px) {
  .col-md-6 {
    width: 50%;
    padding: 10px;
  }
}

@media (min-width: 992px) {
  .col-md-6 {
    width: 33.33%;
    padding: 10px;
  }
}

  </style>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<form action="proses/register.php" method="POST">
<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
						<div class="title-text">
							<h3>Sign Up to To Your Account</h3>
						</div>
						<form action="#">
							<!-- Username -->

<input class="form-control main" type="text" placeholder="Nama" name="nama" required>
<input class="form-control main" type="text" placeholder="Email" name="email" required>
<input class="form-control main" type="text" placeholder="Username" name="username" required>
<!-- Password -->
<input class="form-control main" type="text" placeholder="No Telp" name="no_telp" required>
<input class="form-control main" type="password" placeholder="Password" name="password" required>
<input class="form-control main" type="password" placeholder="Konfirmasi Password" name="konfirmasi" required>
<!-- Submit Button -->
<button type="submit" class="btn btn-main-sm">SIGN UP</a></button><br>
						</form><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>


</html>

 <?php 
	include 'footer.php';
 ?>


