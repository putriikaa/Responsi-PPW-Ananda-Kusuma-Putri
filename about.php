<?php 
  include 'header.php';
?>

<?php 
?>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>
    /* CSS untuk slider container */
    .swiper-container {
      width: 100%;
      height: 100vh; 
      position: relative;
      overflow: hidden;
    }

    /* CSS untuk slide */
    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      background-size: cover;
      background-position: center;
      height: 100%;
    }

  .container-customer {
  background-image: url('img/room19.jpg');
  background-size: cover;
  background-position: center;
  opacity: 0.8;
}

.testimonial {
  display: flex;
  justify-content: center;
  align-items: center;
}

.testimonial-item {
  width: 300px;
  padding: 20px;
  margin: 20px;
  background-color: #f1f1f1;
  border-radius: 5px;
  text-align: center;
}

.testimonial-item img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.testimonial-text {
  font-style: italic;
  margin-bottom: 10px;
}

.customer-name {
  font-weight: bold;
}
.heading {
  font-size: 24px;
  margin-bottom: 20px;
}

.content {
  display: flex;
  align-items: flex-start;
}


.image {
  display: flex;
  flex-basis: 40%;
  margin-right: 20px;
}

.image img {
  max-width: 200px;
  height: auto;
  margin-right: 10px;
}
.heading{
  align-items: center;
  text-align: center;
}
.text {
  flex-basis: 60%;
  align-items: center;
  text-align: center;
}

.text p {
  font-size: 16px;
  align-items: center;
  text-align: center;
}
  </style>
</head>

<body>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('img/bg1.jpg');">
      </div>
      <div class="swiper-slide" style="background-image: url('img/room3.jpg');">
      </div>
      <div class="swiper-slide" style="background-image: url('img/room17.jpg');">
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Link JS Swiper -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    // Inisialisasi Swiper
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 1500, // Waktu tunda antara slide (dalam milidetik)
        disableOnInteraction: false, // Nyalakan autoplay saat interaksi pengguna dengan slider
      },
      effect: 'slide', // Efek transisi slide
      speed: 1000, // Kecepatan perpindahan slide (dalam milidetik)
      loop: true, // Mengaktifkan looping slide
    });
  </script>

<!-- ABOUT -->
<div class="container">
    <h1 class="heading">About Us</h1>
    <div class="content">
      <div class="image">
        <img src="img/gb3.jpg" alt="About Us Image 1">
        <img src="img/hotel4.jpg" alt="About Us Image 2">
      </div>
      <div class="text"><br><br>
        <p>DreamDwell is a leading online accommodation site. We’re passionate about travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41 languages.
        So when it comes to booking the perfect hotel, vacation rental, resort, apartment, guest house, or tree house, we’ve got you covered.</p>
      </div>
    </div>
  </div>
</body>
<br>
<br>

<!-- TESTI -->

    <h1 class="heading">Customer Testimonials</h1>
    <div class="container-customer">
    <div class="testimonial">
      <div class="testimonial-item">
        <img src="img/testi3.jpg" alt="Customer 1">
        <p class="testimonial-text">"I had an amazing stay at the hotel. The staff was friendly and accommodating, the rooms were clean and comfortable, and the location was perfect. I highly recommend this hotel"</p>
        <p class="customer-name">- Farah Coppen</p>
      </div>
      <div class="testimonial-item">
        <img src="img/testi2.jpg" alt="Customer 2">
        <p class="testimonial-text">"The hotel exceeded my expectations. The amenities were top-notch, the service was exceptional, and the views from the room were breathtaking. I can't wait to stay here again on my next trip."</p>
        <p class="custome
        r-name">- Jane Smith</p>
      </div>
      <div class="testimonial-item">
        <img src="img/testi1.jpg" alt="Customer 1">
        <p class="testimonial-text">"I had a fantastic experience at this hotel. The staff went above and beyond to make my stay enjoyable, the facilities were luxurious, and the food at the hotel restaurant was delicious."</p>
        <p class="customer-name">- Sarah Jonson</p>
      </div>
    </div>
  </div>
</html>
<?php 
  include 'footer.php';
?>
