<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Home</title>

    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="./styles/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <!-- Font Awesome CDN for Icons and Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 JS CDN -->
    <script src="./script/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

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
                            <img class="left-car-image d-block w-100" src="./images/index/left_carousel_3.jpg"
                                alt="First Slide" />
                            <div class="carousel-caption d-none d-md-block item-z-index">
                                <h5>First Slide</h5>
                                <p>Some placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="left-car-image d-block w-100" src="./images/index/left_carousel_2.jpg"
                                alt="Second Slide" />
                            <div class="carousel-caption d-none d-md-block item-z-index">
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
                    <div class="col-12 pe-0">
                        <div id="topRightCarousel" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="5000">
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active">
                                    <div class="d-block item-z-index">
                                        <div class="image-aspect d-none d-md-block item-z-index">
                                            <h5>First Slide</h5>
                                            <p>Top-right carousel content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-block">
                                        <div class="image-aspect d-none d-md-block item-z-index">
                                            <h5>Second Slide</h5>
                                            <p>Top-right carousel content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-block">
                                        <div class="image-aspect d-none d-md-block">
                                            <h5>Third Slide</h5>
                                            <p>Top-right carousel content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pe-0">
                        <div id="bottomRightCarousel" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="image-aspect d-block" src="./images/index/bottom_right_carousel_1.jpg"
                                        alt="First Slide" />
                                    <div class="carousel-caption d-none d-md-block  item-z-index">
                                        <h5>First Slide</h5>
                                        <p>Bottom-right carousel content.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="image-aspect d-block" src="./images/index/bottom_right_carousel_3.jpg"
                                        alt="Second Slide" />
                                    <div class="carousel-caption d-none d-md-block  item-z-index">
                                        <h5>Second Slide</h5>
                                        <p>Bottom-right carousel content.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="image-aspect d-block" src="./images/index/bottom_right_carousel_2.jpg"
                                        alt="Second Slide" />
                                    <div class="carousel-caption d-none d-md-block  item-z-index">
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

    <div id="our_services" class="container text-center my-5">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <h2 class="fw-bold">Our Services</h2>
                <span>
                    <p class="fw-lighter">
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
        <div class="row g-2 g-lg-4 text-start">
            <a class="col-6 col-md-4 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
                <div
                    class="custom-hover d-flex align-items-center justify-content-center rounded-4 services-card-index cards-index box-shadow-1rem">
                    <div class="py-2 py-lg-4">
                        <img width="50px" class="services-png" src="./images/cycle.png" alt="" class="src" />
                        <h6 class="pt-2 line-break">Revenue Cycle Management (RCM)</h6>
                        <p class="mb-0 d-none d-md-block">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </div>
            </a>
            <a class="col-6 col-md-4 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
                <div
                    class="custom-hover d-flex align-items-center justify-content-center rounded-4 services-card-index cards-index box-shadow-1rem">
                    <div class="py-2 py-lg-4">
                        <img width="50px" class="services-png" src="./images/preview.png" alt="" class="src" />
                        <h6 class="pt-2 line-break">Medical Record Review</h6>
                        <p class="mb-0 d-none d-md-block">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </div>
            </a>
            <a class="col-6 col-md-4 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
                <div
                    class="custom-hover d-flex align-items-center justify-content-center rounded-4 services-card-index cards-index box-shadow-1rem">
                    <div class="py-2 py-lg-4">
                        <img width="50px" class="services-png" src="./images/transcription.png" alt="" class="src" />
                        <h6 class="pt-2 line-break">Medical Transcription</h6>
                        <p class="mb-0 d-none d-md-block">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </div>
            </a>
            <a class="col-6 col-md-4 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
                <div
                    class="custom-hover d-flex align-items-center justify-content-center rounded-4 services-card-index cards-index box-shadow-1rem">
                    <div class="py-2 py-lg-4">
                        <img width="50px" class="services-png" src="./images/writing.png" alt="" class="src" />
                        <h6 class="pt-2 line-break">Medical Scribing</h6>
                        <p class="mb-0 d-none d-md-block">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </div>
            </a>
            <a class="col-6 col-md-4 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
                <div
                    class="custom-hover d-flex align-items-center justify-content-center rounded-4 services-card-index cards-index box-shadow-1rem">
                    <div class="py-2 py-lg-4">
                        <img width="50px" class="services-png" src="./images/coding.png" alt="" class="src" />
                        <h6 class="pt-2 line-break">Medical Coding</h6>
                        <p class="mb-0 d-none d-md-block">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </div>
            </a>
            <a class="col-6 col-md-4 col-lg-4 text-decoration-none" href="./services/revenue_cycle_management.php">
                <div
                    class="custom-hover d-flex align-items-center justify-content-center rounded-4 services-card-index cards-index box-shadow-1rem">
                    <div class="py-2 py-lg-4">
                        <img width="50px" class="services-png" src="./images/injection.png" alt="" class="src" />
                        <h6 class="pt-2 line-break">Pharmacovigilance</h6>
                        <p class="mb-0 d-none d-md-block">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div id="why_section" class="container custom-container my-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="fw-bold">Why Choose TechnicaForts?</h2>
            </div>
            <div class="col-12 mt-4">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-5 text-start text-md-end">
                        <p class="fw-lighter">TechnicaForts has been extremely honored to have maintained 100% customer
                            retention over
                            our nearly two
                            decades providing services to the healthcare industry!</p>
                    </div>
                    <div class="col-12 col-md-5 text-end">
                        <img src="./images/index/why_section_1.jpeg" alt="Why Choose TechnicaForts 1"
                            class="rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-5 text-start">
                        <img src="./images/index/why_section_2.jpeg" alt="Why Choose TechnicaForts 2"
                            class="rounded-4 shadow-lg">
                    </div>
                    <div class="col-12 col-md-5 text-start mt-3 mt-md-0">
                        <ul class="choose-list">
                            <li class="">100% Customer Focused</li>
                            <li class="">Reliable Service Provider</li>
                            <li class="">Focused on Increasing Client Revenue</li>
                            <li class="">Dedicated U.S. Account Team</li>
                            <li class="">Highly Experienced Teams</li>
                            <li class="">Always Working to Lower Client Costs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid py-4 bg-custom-blue box-shadow-2rem">
        <!-- Features Section -->
        <div class="row g-3">
            <div class="col-6 col-md-6 col-lg-4 image-column">
                <img class="rounded-5 custom-hover" src="./images/index/features/feature_1.jpg">
            </div>
            <div class="col-6 col-md-6 col-lg-4 text-column rounded-5 custom-hover">
                <p class="text-light mb-0">100% Client
                    Satisfaction</p>
            </div>
            <div class="col-6 col-md-6 col-lg-4 image-column custom-hover">
                <img class="rounded-5" src="./images/index/features/feature_2.jpg">
            </div>
            <div class="col-6 col-md-6 col-lg-4 text-column  rounded-5 custom-hover">
                <p class="text-light mb-0">100% Client
                    Satisfaction</p>
            </div>
            <div class="col-6 col-md-6 col-lg-4 image-column custom-hover">
                <img class="rounded-5" src="./images/index/features/feature_3.webp">
            </div>
            <div class="col-6 col-md-6 col-lg-4 text-column rounded-5 custom-hover">
                <p class="text-light mb-0">100% Client
                    Satisfaction</p>
            </div>

            <div class="col-6 col-md-6 col-lg-4 image-column custom-hover">
                <img class="rounded-5" src="./images/index/features/feature_3.webp">
            </div>
            <div class="col-6 col-md-6 col-lg-4 text-column rounded-5 custom-hover">
                <p class="text-light mb-0">100% Client
                    Satisfaction</p>
            </div>
        </div>
    </div>

    <!-- Customer Success Section -->
    <div id="customer_success_section" class="container custom-container my-5">
        <div class="row align-items-center gx-5">
            <div class="col-md-6">
                <h2 class="fw-bold">Customer Success</h2>
                <p class="customer-para">MedVoice was founded nearly 20 years ago with the commitment to provide
                    critically needed Administrative Services to the Healthcare Industry that would resolve the
                    tremendous burden and expense related to medical documentation and billing related tasks. MedVoice
                    has remained committed to fostering lasting relationships with our Clients through delivering
                    exceptional Services and great value that help drive our Clients' success!</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="p-3">
                    <img class="shadow-lg rounded-4"
                        src="https://medvoiceinc.com/wp-content/uploads/2023/12/Happy-Doctor-scaled-1-1536x1024.jpeg"
                        alt="Customer Success" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- News and Insights Section -->
    <div id="" class="container-fluid px-0 my-5 new_insights">
        <div class="m-5 mx-auto text-center container">
            <h2 class="fw-bold mb-4">News and Insights</h2>
            <div class="row news-insights">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body new_insights">
                            <img src="https://medvoiceinc.com/wp-content/uploads/2024/02/blog-thumb-rcm.webp"
                                class="card-img-top card-img" alt="News">
                            <div class="text-start mt-3">
                                <h6 class="news-title fw-bold">Behind the Scenes of Healthcare: The Vital Role of
                                    Medical
                                    Scribes
                                </h6>
                                <p class="three-line-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo architecto eligendi
                                    quidem necessitatibus ducimus velit nemo, fugit, repellat magnam nulla odio sequi
                                    perferendis, voluptatem nostrum. Magnam ducimus dolor repudiandae iure!</p>
                                <a href="#">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body new_insights">
                            <img src="https://medvoiceinc.com/wp-content/uploads/2024/02/blog-thumb-rcm.webp"
                                class="card-img-top card-img" alt="News">
                            <div class="text-start mt-3">
                                <h6 class="news-title fw-bold">Behind the Scenes of Healthcare: The Vital Role of Medical
                                    Scribes
                                </h6>
                                <p class="three-line-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo architecto eligendi
                                    quidem necessitatibus ducimus velit nemo, fugit, repellat magnam nulla odio sequi
                                    perferendis, voluptatem nostrum. Magnam ducimus dolor repudiandae iure!</p>
                                <a href="#">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body new_insights">
                            <img src="https://medvoiceinc.com/wp-content/uploads/2024/02/blog-thumb-rcm.webp"
                                class="card-img-top card-img" alt="News">
                            <div class="text-start mt-3">
                                <h6 class="news-title fw-bold">Behind the Scenes of Healthcare: The Vital Role of Medical
                                    Scribes
                                </h6>
                                <p class="three-line-ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo architecto eligendi
                                    quidem necessitatibus ducimus velit nemo, fugit, repellat magnam nulla odio sequi
                                    perferendis, voluptatem nostrum. Magnam ducimus dolor repudiandae iure!</p>
                                <a href="#">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./footer.php" ?>
</body>

</html>