<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home</title>

  <!-- Bootstrap 5.3 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">

  <!-- Font Awesome CDN for Icons and Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Iceland&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./styles/index_styles.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white shadow px-5">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center py-0" href="index.php">
        <img src="./images/index/logo.png" alt="Logo" class="logo-img">
      </a>

      <!-- Navbar Toggler (for Mobile View) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="container align-items-center justify-content-between"><!-- Center Branding -->
        <!-- <div class="col-4">
          <h2 id="company_name" class="fw-bold mb-0 iceland-regular">Technica Forts</h2>
        </div> -->

        <!-- Links (Collapsed in Mobile) -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-lg-3 rounded-3">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-lg-3 rounded-3 dropdown">
              <a class="nav-link dropdown-toggle" href="./services.php" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu rounded-4 mx-auto py-3 px-2">
                <li><a class="dropdown-item rounded-5 my-1" href="./services/medical_coding.php">Medical
                    Coding</a></li>
                <li><a class="dropdown-item rounded-5 my-1" href="./services/medical_record_review.php">Medical
                    Record Review</a></li>
                <li><a class="dropdown-item rounded-5 my-1" href="./services/medical_scribing.php">Medical
                    Scribing</a></li>
                <li><a class="dropdown-item rounded-5 my-1" href="./services/medical_transcription.php">Medical
                    Transcription</a></li>
                <li><a class="dropdown-item rounded-5 my-1"
                    href="./services/pharmacovigilance.php">Pharmacovigilance</a></li>
                <li><a class="dropdown-item rounded-5 my-1" href="./services/revenue_cycle_management.php">Revenue
                    Cycle Management</a></li>
              </ul>
            </li>
            <li class="nav-item mx-lg-3 rounded-3">
              <a class="nav-link" href="./case_study.php">Case Study</a>
            </li>
            <li class="nav-item mx-lg-3 rounded-3">
              <a class="nav-link" href="./about_us.php">About Us</a>
            </li>
            <li class="nav-item mx-lg-3 rounded-3">
              <a class="nav-link" href="./resources.php">Resources</a>
            </li>
            <li class="nav-item mx-lg-3 rounded-3">
              <a class="nav-link" href="./contact_us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Social Media Icons -->
      <div class="fs-5 social-media-parent">
        <a href="#" class="social-media rounded-3 text-decoration-none g-plus" target="_blank">
          <i class="fab fa-google-plus-square"></i>
        </a>
        <a href="#" class="social-media rounded-3 text-decoration-none facebook" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a href="#" class="social-media rounded-3 text-decoration-none linkedin" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="social-media rounded-3 text-decoration-none instagram" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="social-media rounded-3 text-decoration-none twitter" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </div>
  </nav>

  <!-- Carousel -->
  <div id="index_banner" class="container-fluid p-0">
    <div class="row m-0">
      <!-- Left Carousel -->
      <div class="col-md-6 p-0">
        <div id="leftCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="left-car-image d-block w-100" src="./images/index/left_carousel_3.jpg" alt="First Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>First Slide</h5>
                <p>Some placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="left-car-image d-block w-100" src="./images/index/left_carousel_2.jpg" alt="Second Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second Slide</h5>
                <p>Some placeholder content for the second slide.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Carousels -->
      <div class="col-md-6 p-0">
        <div class="row me-0">
          <!-- Top Right Carousel -->
          <div class="col-12 pe-0">
            <div id="topRightCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="image-aspect d-block w-100" src="./images/index/top_right_carousel_2.jpg"
                    alt="First Slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Top-right carousel content.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="image-aspect d-block w-100" src="./images/index/top_right_carousel_1.jpg"
                    alt="Second Slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide</h5>
                    <p>Top-right carousel content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Bottom Right Carousel -->
          <div class="col-12 pe-0">
            <div id="bottomRightCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="image-aspect d-block w-100" src="./images/index/bottom_right_carousel_1.jpg"
                    alt="First Slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Bottom-right carousel content.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="image-aspect d-block w-100" src="./images/index/bottom_right_carousel_2.jpg"
                    alt="Second Slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide</h5>
                    <p>Bottom-right carousel content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid text-center my-4">
    <div class="w-50 container">
      <h1 class="iceland-regular fw-bold">Our Services</h1>
      <span>
        <p class="fs-5 fw-lighter text">
          TechnicaForts is a leading Medical Service Provider that excels in Medical Coding, Medical Documentation, and
          Revenue Cycle Management. By seamlessly integrating cutting-edge technologies with a team of industry experts,
          we deliver exceptional value and results for our clients. Partner with us to unlock the full potential of your
          medical services and experience the difference of working with a dedicated team that prioritizes your success!
        </p>
      </span>
    </div>
    <div class="container" id="services_cards_index">
      <div class="row g-5 text-start">
        <div class="col-4">
          <div class="mx-auto rounded-4 cards_index">
            <img class="services-png" src="./images/cycle.png" alt="" class="src">
            <h6 class="iceland-regular">Revenue Cycle Management (RCM)</h6>
          
            </div>
        </div>
        <div class="col-4">
          <div class="mx-auto rounded-4 cards_index">
            <img class="services-png" src="./images/preview.png" alt="" class="src">
            <h6 class="iceland-regular">Medical Record Review</h6>
          
            </div>
        </div>
        <div class="col-4">
          <div class="mx-auto rounded-4 cards_index">
            <img class="services-png" src="./images/transcription.png" alt="" class="src">
            <h6 class="iceland-regular">Medical Transcription</h6>
          
            </div>
        </div>
        <div class="col-4">
          <div class="mx-auto rounded-4 cards_index">
            <img class="services-png" src="./images/writing.png" alt="" class="src">
            <h6 class="iceland-regular">Medical Scribing</h6>
          
            </div>
        </div>
        <div class="col-4">
          <div class="mx-auto rounded-4 cards_index">
            <img class="services-png" src="./images/coding.png" alt="" class="src">
            <h6 class="iceland-regular">Medical Coding</h6>
          
            </div>
        </div>
        <div class="col-4">
          <div class="mx-auto rounded-4 cards_index">
            <img class="services-png" src="./images/injection.png" alt="" class="src">
            <h6 class="iceland-regular">Pharmacovigilance</h6>
          
            </div>
        </div>
      </div>

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit accumsan nisl ac accumsan. Vivamus non est
      a
      dui sodales elementum. Mauris ac purus tincidunt, egestas purus ac, sodales est. Mauris luctus aliquam libero, sit
      amet dictum dui egestas nec. Mauris pharetra felis id ultrices congue. Donec ut ex ac quam molestie auctor ut et
      massa. Nam vulputate tortor non tortor mattis pellentesque. Pellentesque velit metus, sodales id pretium eget,
      pulvinar vitae est. Aliquam tempor sapien vel neque varius lobortis. Integer a mi posuere eros accumsan semper non
      nec
      nulla. Integer finibus blandit leo. Suspendisse et lacus nec mi tincidunt facilisis. Suspendisse potenti. Vivamus
      at
      turpis consectetur, molestie libero eu, dictum nisl. Donec mattis leo nec convallis scelerisque. Ut luctus mauris
      non
      massa ultricies, eget placerat tortor viverra.

      Donec scelerisque condimentum risus id venenatis. In ac magna vel sapien dapibus suscipit. Vestibulum vulputate
      mauris
      sit amet neque luctus, ut imperdiet lectus finibus. Aenean pellentesque sollicitudin erat, quis facilisis mi
      facilisis
      quis. Nunc imperdiet id odio vel bibendum. Nunc tincidunt mi posuere, condimentum quam et, vestibulum augue.
      Aliquam
      convallis elementum posuere.

      Aliquam aliquet molestie libero. Cras lacus mauris, condimentum at consectetur a, commodo a nulla. Lorem ipsum
      dolor
      sit amet, consectetur adipiscing elit. Duis sodales, mauris quis facilisis laoreet, odio nisi tristique erat, in
      luctus orci erat sed arcu. Praesent non dui finibus, interdum nisl eget, ultrices massa. Duis malesuada fermentum
      malesuada. Nulla non nunc non erat eleifend eleifend. Praesent et est eget erat lacinia viverra et sit amet felis.
      Curabitur dapibus orci at semper elementum. In nec tortor viverra, mattis velit vitae, consectetur metus. Cras
      feugiat, felis non ultricies dignissim, sapien justo accumsan est, eget tristique odio felis a dui. Vestibulum ut
      egestas ante, vitae dictum felis.

      In id erat lacinia, mattis elit vitae, vehicula nibh. Nullam eget gravida libero. Fusce libero magna, congue eget
      ornare vel, scelerisque malesuada ante. Pellentesque eleifend mauris mi, vitae iaculis quam porta in. Nulla dui
      diam,
      laoreet in lacinia aliquet, cursus tempor diam. Nunc aliquet tortor ut gravida gravida. Aliquam erat volutpat.
      Quisque
      eu nibh at eros sollicitudin porta quis in dui. Donec quis sodales mauris. Sed condimentum libero arcu, ut blandit
      sapien imperdiet sed. Morbi commodo nibh quam, non consequat orci mollis in. Ut massa sapien, accumsan at molestie
      id,
      volutpat a turpis. Nunc eget euismod quam, quis consectetur dui.

      Nullam faucibus congue metus in tristique. Etiam sed fermentum leo. Nulla facilisi. Nam vel leo consequat, sodales
      nulla sit amet, tempus elit. Suspendisse ultrices ultricies tincidunt. Nunc lacinia vitae mi ac venenatis.
      Phasellus
      quis porttitor ante, sit amet congue augue. Aenean consequat, mi scelerisque dignissim pharetra, nisl mi rutrum
      libero, id ultricies lectus elit a libero. Proin vestibulum velit sed neque consectetur, nec pellentesque sem
      rhoncus.
      Vivamus nec bibendum eros.

      Aliquam sed felis molestie erat eleifend eleifend. Nunc vitae faucibus nulla. Mauris leo lectus, vulputate ut
      felis
      eget, vulputate dictum diam. In auctor elit sapien, vel rutrum diam bibendum id. Maecenas ac tellus lacus. Fusce
      vitae
      finibus elit. Duis vulputate arcu ac lectus vehicula euismod. Ut et sem risus. Nulla at lobortis erat, vitae
      porttitor
      massa.

      Aliquam dignissim lorem et semper sodales. Suspendisse vel dui pellentesque, accumsan mauris ac, ornare nulla. Sed
      vulputate ex est, molestie tempor metus scelerisque ac. Duis id tortor quam. Ut scelerisque risus urna, eu
      tincidunt
      erat auctor ut. Donec varius turpis vitae felis fermentum, non porta nulla congue. Morbi in tempor nunc. Fusce nec
      nulla finibus nulla facilisis laoreet eget in nisl. Phasellus vestibulum est est, in posuere quam condimentum
      vitae.
      Sed in sodales leo. Phasellus tempus sodales quam non aliquam. Vestibulum efficitur urna libero, egestas laoreet
      mi
      varius pharetra. Maecenas quis dui nisi. Donec dui nisl, consectetur id tincidunt sed, mollis et libero. Fusce
      consequat non augue non rutrum.

      Nam egestas turpis quis consectetur tristique. Praesent enim est, ullamcorper at mi a, pellentesque pulvinar nibh.
      Maecenas eu finibus dolor, ut posuere nibh. Nulla consectetur sagittis ultrices. Vivamus blandit suscipit egestas.
      Vivamus odio sem, ultricies sit amet venenatis ut, facilisis ut dolor. Nullam porta auctor sodales. Nunc tincidunt
      ex
      sit amet lacinia porttitor. Donec commodo leo ac enim egestas suscipit. Praesent in dolor pellentesque, iaculis
      arcu
      vel, sollicitudin lorem. Vivamus sed porttitor tellus. Etiam sagittis lacinia tincidunt.

      Phasellus vitae molestie metus. Quisque luctus, odio nec fermentum interdum, velit sem imperdiet dolor, a sagittis
      justo ipsum in risus. Pellentesque eu laoreet diam. Praesent vitae tellus sit amet eros imperdiet maximus.
      Praesent
      eu
      diam vel augue feugiat facilisis ut eget leo. Nam pretium sagittis pharetra. Maecenas ac lobortis tortor.

      Proin sit amet semper lorem, vitae tempus dui. Duis in purus iaculis, vestibulum risus non, sagittis libero.
      Nullam
      malesuada orci odio, sed dignissim mauris pharetra a. Duis ac tortor commodo, dapibus quam vitae, semper odio.
      Quisque
      vitae felis eget metus pellentesque aliquam a ac augue. Fusce sagittis ex consectetur bibendum tincidunt. Fusce in
      laoreet turpis, ut tristique nisi. Donec at dui quis lorem imperdiet suscipit. Vestibulum sapien risus, feugiat
      eget
      elit ut, sodales luctus ligula. Sed ex metus, placerat maximus ornare at, pellentesque sed purus. Nam nec
      facilisis
      nibh. Nullam tortor nisl, tincidunt ut ante quis, aliquet mattis nibh. Curabitur quis nisl eu odio lacinia
      pulvinar
      aliquam id urna. Ut aliquet efficitur ipsum, vitae sagittis quam maximus a. Maecenas lobortis ipsum nec mauris
      posuere, a feugiat tellus tempus. Fusce eu molestie risus, id tempor quam.
    </div>


</body>

</html>