<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat&family=Satisfy&display=swap" rel="stylesheet">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->


<header>
  <img src="images/logo.png" alt="Logo esa">
  <nav>
      <button> <a href="home.php"><b>home</b></a> </button>
      <button><a href="about.php"><b>about</b></a> </button>
      <button><a href="package.php"><b>package</b></a> </button>
      <button><a href="book.php"><b>book</b></a> </button>
   </nav>
</header>

<!-- header section ends -->

<div class="heading" style="background:url(images/5.jpg) no-repeat">
   <h1></h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">ভ্রমণের জন্য বুকিং করুন এখানে!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="আপনার নাম লিখুন" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="আপনার ইমেইল লিখুন" name="email">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="আপনার ফোন নাম্বার লিখুন " name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="আপনার ঠিকানা লিখুন" name="address">
         </div>
         <div class="inputBox">
            <span>Where to :</span>
            <input type="text" placeholder="আপনি কোথায় যেতে চান" name="location">
         </div>
         <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="কতজন যেতে চান" name="guest">
         </div>
         <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrival">
         </div>
         <div class="inputBox">
            <span>Leaving :</span>
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
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="faq.php"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about_us.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="privacy.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="termsOfUse.php"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
      <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880 17XXXXXXXX </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> tamtas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Team Syndicate web developer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>