<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dental Clinic</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Clinic.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>
<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>Good looking people with strong, fluoridated teeth get things handed to them on platters.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>We should take great care of our teeth.We have top-notch technology and dentists to make your smile brighter.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>


<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Alignment specialist</h3>
         <p>Get your teeth properly aligned at a very low cost.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Make your teeth look more beautiful and bright.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Say goodbye to bad breath,start your day with a freshened smile.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Root canal specialist</h3>
         <p> relieve THE pain caused by an infected or abscessed tooth.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Live dental advisory</h3>
         <p>Get live advise to keep your bright smile intact.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Cavity inspection</h3>
         <p>Get your teeth cavities filled in no time and without pain.</p>
      </div>

   </div>

</section>


<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Make your smile better and brighter.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>offers a wide range of treatment options to care for your child's teeth, gums and mouth.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Replace your missing teeth and restore your bright smile.</p>
      </div>

   </div>

</section>


<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>My Root Canal treatment was very fast and painless</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jack Oska</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>My teeth are now perfectly aligned and have no gaps between them,thanks to dentalclinic</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maria Lily</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I was suffering from severe tooth pain until I came to dentalclinic,they gave the perfect treatment and now my smile is back again</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn" class="align">
   </form>  

</section>

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+91-9999988888</p>
         <p>+911-2666-1010</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Kolkata, India - 700001</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>09:00am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>drroy@gmail.com</p>
         <p>dentalclinic@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Kaustav Mitra</span>  </div>

</section>

<script src="index.js"></script>

</body>
</html>