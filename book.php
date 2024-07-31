<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">TourNTrip</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
      </div>

      <div class="box">
         <h3>Extra links</h3>
         <a href="docs/FAQs.pdf"> <i class="fas fa-angle-right"></i>FAQ's</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About us</a>
         <a href="docs/Privacy Policy.pdf"> <i class="fas fa-angle-right"></i> Privacy policy</a>
         <a href="docs/Terms of Use.pdf"> <i class="fas fa-angle-right"></i> Terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> tourntrip23@gmail.com </a>
         <a href="https://www.google.com/maps/place/Andheri+East,+Mumbai,+Maharashtra/@19.114741,72.8509808,14z/data=!3m1!4b1!4m13!1m7!3m6!1s0x3be7c6306644edc1:0x5da4ed8f8d648c69!2sMumbai,+Maharashtra!3b1!8m2!3d19.0759837!4d72.8776559!3m4!1s0x3be7b61b41dfb131:0xa668297563ddac31!8m2!3d19.1178408!4d72.8631306"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100089230500502"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/Tour_N_Trip"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/tour._n._trip/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/tourntrip-dotcom-aa841325a/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3B5YCD1OJYTxupk2416vfG%2Bg%3D%3D"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit">| all rights reserved! | </div>

</section>

<!-- footer section ends -->








<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>