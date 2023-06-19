<link href="css/css_login.css" rel="stylesheet">
<?php
include 'header.php';
?>

<div class="container2">
  <video src="img/hotelbg.mp4" autoplay loop muted></video>
  <div class="login-container">
    <h2>Welcome to DreamDwell</h2>
    
    <div class="login-form">
      <form action="proses/login.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <p>Don't have an account? <a href="register.php">Sign Up</a></p>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>
