<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cat&rsquo;s Meow Resort: Stay</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asul&family=Chivo:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body id="page-id--stay">
  <div id="main-nav" class="bgcolor--orange">
    <div class="paw-tab bgcolor--orange">
      <a class="paw-button" href="javascript:void(0);"><img class="paw-logomark" src="./images/paw.svg" alt="Paw logomark"></a>
    </div>
    <nav>
      <ul class="nav-menu chivo color--black font-weight--light">
        <li class="nav-item nav-item--home"><a href="./index.php">Home</a></li>
        <li class="nav-item nav-item--about-us"><a href="./about-us.php">About Us</a></li>
        <li class="nav-item nav-item--stay"><a href="./stay.php">Stay</a></li>
        <li class="nav-item nav-item--grooming"><a href="./grooming.php">Grooming</a></li>
        <li class="nav-item nav-item--party"><a href="./party.php">Party</a></li>
      </ul>
    </nav>
  </div>
  <div id="main">
    <section class="leadspace-hero">
      <div class="container-fluid">
        <h1 class="asul leadspace-hero__heading color--orange">Cat&rsquo;s <span class="leadspace-hero__heading-wrap chivo">Meow</span> Resort</h1>
      </div>
    </section>
    <!-- cta-two-col component -->
    <?php require 'data/cta-two-col-content__stay.php'; ?>
    <?php require 'components/cta-two-col.php'; ?>

    <!-- accordion component -->
    <?php require 'data/accordion-with-image-content__stay.php'; ?>
    <?php require 'components/accordion-with-image.php'; ?>
    
    <!-- carousel component -->
    <section class="carousel"></section>
  </div>

  <?php require 'components/footer.php'; ?>
