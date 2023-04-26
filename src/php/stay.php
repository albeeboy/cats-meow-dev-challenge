  <?php require 'components/header.php'; ?>

  <title>Cat&rsquo;s Meow Resort: Stay</title>
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
        <h1 class="asul leadspace-hero__heading color--orange">Cat&rsquo;s<span class="leadspace-hero__heading-wrap chivo">Meow</span>Resort</h1>
      </div>
    </section>
    <!-- cta-two-col component -->
    <?php require 'data/cta-two-col-content__stay.php'; ?>
    <?php require 'components/cta-two-col.php'; ?>

    <!-- accordion component -->
    <?php require 'data/accordion-with-image-content__stay.php'; ?>
    <?php require 'components/accordion-with-image.php'; ?>
    
    <!-- carousel component -->
    <section class="carousel">
      <div class="container">
        <div class="row justify-content--flex-end">
          <div class="carousel__nav">
            <button class="carousel__button carousel__button--button-left"><?php require 'svg/left_arrow.php'; ?></button>
            <button class="carousel__button carousel__button--button-right"><?php require 'svg/right_arrow.php'; ?></button>
          </div>
        </div>
        <div class="row">
          <div class="carousel__track-container">
            <ul class="carousel__track">
              <li class="carousel__slide">
                <img class="carousel__image" src="./images/carousel_img_1.png" alt="Blurry gray cat">
              </li>
              <li class="carousel__slide">
                <img class="carousel__image" src="./images/carousel_img_2.png" alt="Cat on high catwalk">
              </li>
              <li class="carousel__slide">
                <img class="carousel__image" src="./images/carousel_img_3.png" alt="Cat gym">
              </li>
              <li class="carousel__slide">
                <img class="carousel__image" src="./images/carousel_img_4.png" alt="Playful kitten">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php require 'components/footer.php'; ?>
