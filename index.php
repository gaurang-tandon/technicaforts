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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <!-- Bootstrap 5.3 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
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

    <div id="our_services" class="container-fluid text-center my-5">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <h1 class="roboto-regular fw-bold">Our Services</h1>
                <span>
                    <p class="fs-4 fw-lighter text roboto-regular-text-1rem">
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
                    <div class="rounded-4 services-card-index overflow-hidden cards-index box-shadow-1rem">
                        <img class="services-png" src="./images/cycle.png" alt="" class="src" />
                        <h6 class="roboto-regular">Revenue Cycle Management (RCM)</h6>
                        <p class="mb-0">
                            TechnicaForts’s RCM Service optimizes the claims process,
                            significantly increases revenue, and greatly reduces medical
                            billing costs.
                        </p>
                    </div>
                </a>
                <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_record_review.php">
                    <div class="rounded-4 services-card-index overflow-hidden cards-index box-shadow-1rem">
                        <img class="services-png" src="./images/preview.png" alt="" class="src" />
                        <h6 class="roboto-regular">Medical Record Review</h6>
                        <p class="mb-0">
                            TechnicaForts provides expert Medical Record Review and Summarization
                            Services for Insurance Companies, Workers Compensation
                            organizations, and personal injury Law Firms.
                        </p>
                    </div>
                </a>
                <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_transcription.php">
                    <div class="rounded-4 services-card-index overflow-hidden cards-index box-shadow-1rem">
                        <img class="services-png" src="./images/transcription.png" alt="" class="src" />
                        <h6 class="roboto-regular">Medical Transcription</h6>
                        <p class="mb-0">
                            100% secure Medical Transcription Services with guaranteed
                            Turn-Around Times and accuracy, saving significant time and
                            money for our Clients.
                        </p>
                    </div>
                </a>
                <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_scribing.php">
                    <div class="rounded-4 services-card-index overflow-hidden cards-index box-shadow-1rem">
                        <img class="services-png" src="./images/writing.png" alt="" class="src" />
                        <h6 class="roboto-regular">Medical Scribing</h6>
                        <p class="mb-0">
                            TechnicaForts provides state-of-the-art Medical Scribing Services
                            that combines advanced AI Technology with expert Medical
                            Documentation Specialists.
                        </p>
                    </div>
                </a>
                <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/medical_coding.php">
                    <div class="rounded-4 services-card-index overflow-hidden cards-index box-shadow-1rem">
                        <img class="services-png" src="./images/coding.png" alt="" class="src" />
                        <h6 class="roboto-regular">Medical Coding</h6>
                        <p class="mb-0">
                            TechnicaForts's Medical Coding Service provides highly accurate
                            medical coding, eliminates incorrect and omitted codes, and
                            ensures the highest and fastest reimbursement rates.
                        </p>
                    </div>
                </a>
                <a class="col-12 col-md-6 col-lg-4 text-decoration-none" href="./services/pharmacovigilance.php">
                    <div class="rounded-4 services-card-index overflow-hidden cards-index box-shadow-1rem">
                        <img class="services-png" src="./images/injection.png" alt="" class="src" />
                        <h6 class="roboto-regular">Pharmacovigilance</h6>
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
            <h2 class="roboto-regular fw-bold shadow-rem">Why Choose TechnicaForts?</h2>
            <div class="row justify-content-center align-items-center my-5">
                <div class="col-md-6 text-start roboto-regular-text-1rem">
                    <p class="fw-lighter">TechnicaForts has been extremely honored to have maintained 100% customer
                        retention over
                        our nearly two
                        decades providing services to the healthcare industry!</p>
                </div>
                <div class="col-md-4 text-end">
                    <img src="./images/index/why_section_1.jpeg" alt="Why Choose TechnicaForts 1"
                        class="why-section-img img-fluid box-shadow-1rem">
                </div>
            </div>
            <div class="row justify-content-center align-items-center my-5">
                <div class="col-md-4 text-start">
                    <img src="./images/index/why_section_2.jpeg" alt="Why Choose TechnicaForts 2"
                        class="why-section-img img-flui box-shadow-1rem ">
                </div>
                <div class="col-md-6 text-start text-lg-end roboto-regular-text-1rem mt-3 mt-md-0">
                    <ul class="list-group text-start text-lg-end">
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

        <div class="container-fluid py-4 bg-custom-blue box-shadow-2rem">
            <!-- Features Section -->
            <div class="row g-4 p-3 custom-column">
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <img src="./images/index/features/feature_1.jpg"
                            class="box-shadow-5rem card-img-top card-img rounded-5"
                            alt="20 Years Healthcare Experience">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <div class="card-body box-shadow-5rem rounded-5 border-0 align-items-center d-flex ">
                            <p class="roboto-regular-text-1rem mx-auto text-center text-white mb-0">100% Client
                                Satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <img src="./images/index/features/feature_2.jpg"
                            class="box-shadow-5rem card-img-top card-img rounded-5"
                            alt="20 Years Healthcare Experience">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <div class="card-body box-shadow-5rem rounded-5 border-0 align-items-center d-flex">
                            <p class="roboto-regular-text-1rem mx-auto text-center text-white mb-0">20 Years Healthcare
                                Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <img src="./images/index/features/feature_4.webp"
                            class="box-shadow-5rem card-img-top card-img rounded-5"
                            alt="20 Years Healthcare Experience">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <div class="card-body box-shadow-5rem rounded-5 border-0 align-items-center d-flex">
                            <p class="roboto-regular-text-1rem mx-auto text-center text-white mb-0">Significant Cost
                                Savings</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <img src="./images/index/features/feature_3.webp"
                            class="box-shadow-5rem card-img-top card-img rounded-5" alt="100% Client Satisfaction">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="card custom-image rounded-5 border-0">
                        <div class="card-body box-shadow-5rem rounded-5 border-0 align-items-center d-flex">
                            <p class="roboto-regular-text-1rem mx-auto text-center text-white mb-0">Increased Revenue
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer Success Section -->
    <div id="customer_success_section" class="container my-5">
        <div class="row align-items-center gx-5">
            <div class="col-md-6">
                <h2 class="roboto-regular fw-bold">Customer Success</h2>
                <p class="customer-para">MedVoice was founded nearly 20 years ago with the commitment to provide
                    critically needed Administrative Services to the Healthcare Industry that would resolve the
                    tremendous burden and expense related to medical documentation and billing related tasks. MedVoice
                    has remained committed to fostering lasting relationships with our Clients through delivering
                    exceptional Services and great value that help drive our Clients' success!</p>
                <button class="btn btn-primary fw-bold rounded-4">Let’s Talk</button>
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
    <div id="new_insights" class="container-fluid px-0 my-5">
        <div class="m-5 mx-auto text-center container">
            <h2 class="roboto-regular fw-bold mb-4">News and Insights</h2>
            <div class="row news-insights">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://medvoiceinc.com/wp-content/uploads/2024/02/blog-thumb-rcm.webp"
                                class="card-img-top card-img" alt="News">
                            <div class="text-start mt-3">
                                <h5 class="news-title">Behind the Scenes of Healthcare: The Vital Role of Medical
                                    Scribes
                                </h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo architecto eligendi quidem necessitatibus ducimus velit nemo, fugit, repellat magnam nulla odio sequi perferendis, voluptatem nostrum. Magnam ducimus dolor repudiandae iure!</p>
                                <a href="#" class="btn btn-primary">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://medvoiceinc.com/wp-content/uploads/2024/02/blog-thumb-rcm.webp"
                                class="card-img-top card-img" alt="News">
                            <div class="text-start mt-3">
                                <h5 class="news-title">Behind the Scenes of Healthcare: The Vital Role of Medical
                                    Scribes
                                </h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo architecto eligendi quidem necessitatibus ducimus velit nemo, fugit, repellat magnam nulla odio sequi perferendis, voluptatem nostrum. Magnam ducimus dolor repudiandae iure!</p>
                                <a href="#" class="btn btn-primary">Read More »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://medvoiceinc.com/wp-content/uploads/2024/02/blog-thumb-rcm.webp"
                                class="card-img-top card-img" alt="News">
                            <div class="text-start mt-3">
                                <h5 class="news-title">Behind the Scenes of Healthcare: The Vital Role of Medical
                                    Scribes
                                </h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo architecto eligendi quidem necessitatibus ducimus velit nemo, fugit, repellat magnam nulla odio sequi perferendis, voluptatem nostrum. Magnam ducimus dolor repudiandae iure!</p>
                                <a href="#" class="btn btn-primary">Read More »</a>
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