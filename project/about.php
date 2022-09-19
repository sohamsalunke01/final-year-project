<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="images/steering.png" type="image/png">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> | About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/nature.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Us?</h3>
        
         <ul style="list-style-type:square">
<li><p>Courses designed by professional driving instructors.</p></li>
<li><p>Time-bound driving training and courses</p></li>
<li><p>Learners can ask and clear all doubts at the same time.</p></li>
<li><p>Exposure to both ground and road in the real sense.</p></li>
<li><p>Safe and Secure learning place for girls, boys, men, and women</p></li>
<li><p>100% attention is given to all learners.</p></li>
</ul>

         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Customer Testimonials</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I always wanted to learn how to drive but just dint have the confidence. Also, traveling from home to work and back after changing 2 buses was getting very hectic. But thanks to the patient and skilled instructors at EazyDrive, after finishing the training sessions I feel the most confident on road.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>George Roy, IT Professional</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Women drivers are often known to be the worst drivers. As a woman I wanted a sense of independence but without jeopardizing my life. However, looking at the female instructors at EazyDrive I knew I could drive without  fear and like a pro. Thanks to EazyDrive my students think I am their cool teacher now.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kalyani Nair, Teacher</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Our Tutors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jack Leo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kristhin Gomez</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Taylor Lautner</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>