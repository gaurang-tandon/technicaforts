<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Home</title>

  <!-- Bootstrap 5.3 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />

  <!-- Font Awesome CDN for Icons and Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Iceland&display=swap" rel="stylesheet" />

  <!-- Bootstrap 5.3 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>

  <link rel="stylesheet" href="./styles/navbar.css" />
  <link rel="stylesheet" href="./styles/index_styles.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include "navbar.php" ?>

  <!-- Carousel -->
  <div id="index-banner" class="container-fluid p-0 mb-5">
    <div class="row m-0">
      <!-- Left Carousel -->
      <div class="col-md-6 p-0">
        <div id="leftCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="left-car-image d-block w-100" src="./images/index/left_carousel_3.jpg" alt="First Slide" />
              <div class="carousel-caption d-none d-md-block">
                <h5>First Slide</h5>
                <p>Some placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="left-car-image d-block w-100" src="./images/index/left_carousel_2.jpg" alt="Second Slide" />
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
                    alt="First Slide" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Top-right carousel content.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="image-aspect d-block w-100" src="./images/index/top_right_carousel_1.jpg"
                    alt="Second Slide" />
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
                    alt="First Slide" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Bottom-right carousel content.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="image-aspect d-block w-100" src="./images/index/bottom_right_carousel_2.jpg"
                    alt="Second Slide" />
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

  <div id="our_services" class="container-fluid text-center my-5">
    <div class="row">
      <div class="col-12 col-lg-6 mx-auto">
        <h1 class="iceland-regular fw-bold">Our Services</h1>
        <span>
          <p class="fs-4 fw-lighter text iceland-regular-text-1rem">
            TechnicaForts is a leading Medical Service Provider that excels in
            Medical Coding, Medical Documentation, and Revenue Cycle
            Management. By seamlessly integrating cutting-edge technologies
            with a team of industry experts, we deliver exceptional value and
            results for our clients. Partner with us to unlock the full
            potential of your medical services and experience the difference
            of working with a dedicated team that prioritizes your success!
          </p>
        </span>
      </div>
    </div>
    <div class="container" id="">
      <div class="row g-5 text-start">
        <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
          <div class="rounded-4 overflow-hidden cards-index">
            <img class="services-png" src="./images/cycle.png" alt="" class="src" />
            <h6 class="iceland-regular">Revenue Cycle Management (RCM)</h6>
            <p class="mb-0">
              TechnicaForts’s RCM Service optimizes the claims process,
              significantly increases revenue, and greatly reduces medical
              billing costs.
            </p>
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_record_review.php">
          <div class="rounded-4 overflow-hidden cards-index">
            <img class="services-png" src="./images/preview.png" alt="" class="src" />
            <h6 class="iceland-regular">Medical Record Review</h6>
            <p class="mb-0">
              TechnicaForts provides expert Medical Record Review and Summarization
              Services for Insurance Companies, Workers Compensation
              organizations, and personal injury Law Firms.
            </p>
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_transcription.php">
          <div class="rounded-4 overflow-hidden cards-index">
            <img class="services-png" src="./images/transcription.png" alt="" class="src" />
            <h6 class="iceland-regular">Medical Transcription</h6>
            <p class="mb-0">
              100% secure Medical Transcription Services with guaranteed
              Turn-Around Times and accuracy, saving significant time and
              money for our Clients.
            </p>
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_scribing.php">
          <div class="rounded-4 overflow-hidden cards-index">
            <img class="services-png" src="./images/writing.png" alt="" class="src" />
            <h6 class="iceland-regular">Medical Scribing</h6>
            <p class="mb-0">
              TechnicaForts provides state-of-the-art Medical Scribing Services
              that combines advanced AI Technology with expert Medical
              Documentation Specialists.
            </p>
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_coding.php">
          <div class="rounded-4 overflow-hidden cards-index">
            <img class="services-png" src="./images/coding.png" alt="" class="src" />
            <h6 class="iceland-regular">Medical Coding</h6>
            <p class="mb-0">
              TechnicaForts's Medical Coding Service provides highly accurate
              medical coding, eliminates incorrect and omitted codes, and
              ensures the highest and fastest reimbursement rates.
            </p>
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/pharmacovigilance.php">
          <div class="rounded-4 overflow-hidden cards-index">
            <img class="services-png" src="./images/injection.png" alt="" class="src" />
            <h6 class="iceland-regular">Pharmacovigilance</h6>
            <p class="mb-0">
              TechnicaForts ensures patient safety and regulatory compliance
              through vigilant pharmacovigilance and literature surveillance.
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div id="why_section" class="container-fluid my-5 px-0">
    <div class="m-5 mx-auto text-center container">
      <!-- Why Choose TechnicaForts Section -->
      <h2 class="iceland-regular fw-bold">Why Choose TechnicaForts?</h2>
      <div class="row justify-content-center align-items-center my-5">
        <div class="col-md-6 text-start iceland-regular-text-2rem">
          <p class="fw-lighter">TechnicaForts has been extremely honored to have maintained 100% customer retention over
            our nearly two
            decades providing services to the healthcare industry!</p>
        </div>
        <div class="col-md-4 text-end">
          <img src="./images/index/why_section_1.jpeg" alt="Why Choose TechnicaForts 1"
            class="why-section-img img-fluid">
        </div>
      </div>
      <div class="row justify-content-center align-items-center my-5">
        <div class="col-md-4 text-start">
          <img src="./images/index/why_section_2.jpeg" alt="Why Choose TechnicaForts 2"
            class="why-section-img img-fluid">
        </div>
        <div class="col-md-6 text-end iceland-regular-text-2rem">
          <ul class="list-group text-end">
            <li class="list-group-item fw-lighter">100% Customer Focused</li>
            <li class="list-group-item fw-lighter">Reliable Service Provider</li>
            <li class="list-group-item fw-lighter">Focused on Increasing Client Revenue</li>
            <li class="list-group-item fw-lighter">Dedicated U.S. Account Team</li>
            <li class="list-group-item fw-lighter">Highly Experienced Teams</li>
            <li class="list-group-item fw-lighter">Always Working to Lower Client Costs</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4 bg-custom-blue">
      <!-- Features Section -->
      <div class="container my-5">
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <div class="card-body rounded-5 border-0 align-items-center d-flex ">
                <h6 class="iceland-regular mx-auto text-center">100% Client Satisfaction</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <img src="./images/index/features/feature_1.jpg" class="card-img-top card-img rounded-5"
                alt="20 Years Healthcare Experience">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <div class="card-body rounded-5 border-0 align-items-center d-flex">
                <h6 class="iceland-regular mx-auto text-center">Gaurenteed Accuracy</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <img src="./images/index/features/feature_2.jpg" class="card-img-top card-img rounded-5"
                alt="20 Years Healthcare Experience">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <div class="card-body rounded-5 border-0 align-items-center d-flex">
                <h6 class="iceland-regular mx-auto text-center">20 Years Healthcare Experience</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <img src="./images/index/features/feature_3.webp" class="card-img-top card-img rounded-5"
                alt="20 Years Healthcare Experience">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <div class="card-body rounded-5 border-0 align-items-center d-flex">
                <h6 class="iceland-regular mx-auto text-center">Significant Cost Savings</h6>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <img src="./images/index/features/feature_4.webp" class="card-img-top card-img rounded-5"
              alt="100% Client Satisfaction">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-image rounded-5 border-0">
              <div class="card-body rounded-5 border-0 align-items-center d-flex">
                <h6 class="iceland-regular mx-auto text-center">Increased Revenue</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Customer Success Section -->
  <div id="customer_success_section" class="container-fluid my-5">
    <div class="m-5 mx-auto text-center container">
      <h2 class="iceland-regular fw-bold">Customer Success</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <p>TechnicaForts was founded nearly 20 years ago with the commitment to provide critically needed
            administrative services to the healthcare industry...</p>
          <button class="btn btn-primary">Let’s Talk</button>
        </div>
        <div class="col-md-6 text-center">
          <img src="https://via.placeholder.com/400x300" alt="Customer Success" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!-- News and Insights Section -->
  <div id="new_insights" class="container-fluid px-0 my-5">
    <div class="m-5 mx-auto text-center container">
      <h2 class="iceland-regular fw-bold">News and Insights</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card border-0">
            <img src="https://via.placeholder.com/150" class="card-img-top card-img" alt="News">
            <div class="card-body">
              <h5 class="news-title">5 Ways RCM Services Can Improve Your Cash Flow</h5>
              <p>As a medical provider, you strive to offer the...</p>
              <a href="#" class="btn btn-link">Read More »</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0">
            <img src="https://via.placeholder.com/150" class="card-img-top card-img" alt="News">
            <div class="card-body">
              <h5 class="news-title">Behind the Scenes of Healthcare: The Vital Role of Medical Scribes</h5>
              <p>In the ever-evolving landscape of healthcare, there’s a critical...</p>
              <a href="#" class="btn btn-link">Read More »</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0">
            <img src="https://via.placeholder.com/150" class="card-img-top card-img" alt="News">
            <div class="card-body">
              <h5 class="news-title">The Art and Science of Medical Transcription</h5>
              <p>In the fast-paced world of healthcare, where every detail...</p>
              <a href="#" class="btn btn-link">Read More »</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "./footer.php" ?>
</body>

</html>