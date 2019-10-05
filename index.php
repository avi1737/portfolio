<?php
session_start();
$_SESSION['display']="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/home.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="script.js" type="text/javascript"></script>

</head>
<body>
    <header>
      <a class="logo">Muallem</a>
      <nav>
        <ul class="active">
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>


    <div class="wrapper">
      <section class="hero">
        <div class="inner">
        <h1>I am a full stack developer.</h1>
        </div>
      </section>
    </div>

<div class="aboutHead" id="about">
  <h1>ABOUT</h1>
    <section class="about">
      <div class="profile">
        <div class="img-container">
        <img src="images/avi.jpg" width="100%">
        </div>
        <h2>Avinash Varpeti</h2>
      </div>
      <div class="disc">
         <p>I am a full stack Developer.I have fell in love with programming!I love to create Amazing websites and WebApps.I am a beginner in this domain having 6-months Experience!....</p>
      </div>
    </section>
</div>

<section class="skills">
  <h1>My Skills</h1>
    <section class="whyMe">
      <div class="card">
        <h1>HTML 5</h1>
      </div>
      <div class="card">
        <h1>CSS 3</h1>
        
      </div>
      <div class="card">
        <h1>JAVASCRIPT</h1>
       
      </div>
      <div class="card">
        <h1>MYSQL</h1>
       
      </div>
      <div class="card">
        <h1>PHP</h1>
       
      </div>
    </section>
    </section>


    <section class="contact" id="contact">
      <div class="form-container">
        <h2>get in touch</h2>
        <form method="POST" action="mail.php">
          <input type="text" placeholder="your name" name="name">
          <input type="email" placeholder="your email" name="email">
          <textarea placeholder="ENTER YOUR MESSAGE" name="msg"></textarea>
          <button name="sendbtn">Send</button>
          <h2 id="display"><?php echo $_SESSION['display']; ?></h2>
        </form>
      </div>
      <div class="icons-container">
        <p>Contact No.-7021915752</p>
        <p>avinashvarpeti1@gmail.com</p>
       <p>lets connect on social media</p>
      <a href="https://www.instagram.com/mu_allem_/"><i class="fa fa-instagram fa-2x" id="insta"></i></a>
      <a href="https://www.facebook.com/avinash.varpeti"><i class="fa fa-facebook fa-2x" id="fb"></i></a>
      <a href="https://www.linkedin.com/in/oneside-boss-4300b4172/"><i class="fa fa-linkedin fa-2x" id="linkdn"></i></a>

      </div>
    </section>

</body>
</html>