<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="odilon">
      
    <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">


    <title>entretien et netoyage de biens immobiliers</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap4.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
     <h1 class="logo mr-auto"><a href="index.php" style="color:white" class="instagram bg-success">LisPaz</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <!--<a href="index.html" class="logo mr-auto"><img src="" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      <ul>
                <?php if (isset($_SESSION['auth'])): ?>
                    <li><a href="logout.php">Se déconnecter</a></li>
                <?php else: ?>  
                    <li><a href="register.php">S'inscrire</a></li>
                    <li><a href="login.php">Se connecter</a></li>
                <?php endif; ?>
            </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

<section id="hero">
    <div class="container">
        <?php if(isset($_SESSION['flash'])): ?>
            <?php foreach($_SESSION['flash'] as $type => $message): ?>
                <div class="alert alert-<?= $type; ?>">
                    <?= $message; ?>
                </div>
            <?php endforeach; ?>
            <?php unset($_SESSION['flash']); ?>
        <?php endif; ?>
   
