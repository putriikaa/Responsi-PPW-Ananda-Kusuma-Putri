<?php 
include 'header.php';
?>
   <link href="css/css_manual.css" rel="stylesheet">
   <div class="container">
    <div class="contact-section">
        <h2 class="contact-heading">Contact Us</h2>
        <div class="contact-info">
            <div class="contact-info-item">
                <i class="bi bi-geo-alt-fill"></i>
                <h4>Address</h4>
                <p>Jl.Jembatan Merah 2</p>
            </div>
            <div class="contact-info-item">
                <i class="bi bi-envelope-fill"></i>
                <h4>Email</h4>
                <p>dreamdwell@gmail.com</p>
            </div>
            <div class="contact-info-item">
                <i class="bi bi-phone-fill"></i>
                <h4>Phone</h4>
                <p>+62842428497</p>
            </div>
        </div>
        <div class="contact-form">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="submit-button">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
        <div id="map" style="height: 400px; margin-top: 40px;"></div>

    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFtoFSuC8Fxuf8NmDaBCUCD0rheYyZeFw&callback=initMap" async defer></script>

<script>
    function initMap() {
        // Set the coordinates for your location
        var location = { lat: 12.345678, lng: 98.765432 };

        // Create a map object and specify the DOM element for display
        var map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 10
        });

        // Create a marker and set its position
        var marker = new google.maps.Marker({
            map: map,
            position: location,
            title: 'Your Location'
        });
    }
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php 
include 'footer.php';
?>