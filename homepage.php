<?php 
/* Template Name: Home Page */

get_header(); 
?>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

 <!--  hero section -->
        <section class="hero-banner">
            <div class="container-fluid p-0">
                <div class="ratio ratio-16x9 position-relative">
                    <video autoplay loop muted>
                        <source src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/banner-video.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay d-flex align-items-center justify-content-center">
                        <div class="content-box text-white">
                            <h1 class="banner-heading">Transform Your Visionary Ideas <br> Into Reality With Us</h1>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary btn-custom me-2">Explore Our Firm</a>
                                <a href="#" class="btn btn-secondary btn-custom">How We Work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <!-- portfolio section -->
      <section class="common-section-spacing portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-header">
                            <span class="common-subheading">The Portfolio Of Stories </span>
                            <h2 class="commom-heading">Imagine Your Dream, <br>
                                Beautifully Realised!</h2>
                            <p class="commom-description"> Let our innovative architecture and meticulous interior
                                design inspire your next venture, giving form and structure to your dream space.</p>
                        </div>
                        <div class="portfolio-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                        aria-selected="true">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/all-icon.webp" alt="All"
                                            style="width: 24px; height: 24px; margin-right: 8px;">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-residential-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-residential" type="button" role="tab"
                                        aria-controls="pills-residential" aria-selected="false">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/residential-icon.webp" alt="All"
                                            style="width: 24px; height: 24px; margin-right: 8px;">
                                        Residential</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-commercial-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-commercial" type="button" role="tab"
                                        aria-controls="pills-commercial" aria-selected="false">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/Commercial-icon.webp" alt="All"
                                            style="width: 24px; height: 24px; margin-right: 8px;">
                                        Commercial</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-hospitlality-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-hospitlality" type="button" role="tab"
                                        aria-controls="pills-hospitlality" aria-selected="false">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/hospitlality-icon.webp" alt="All"
                                            style="width: 24px; height: 24px; margin-right: 8px;">
                                        Hospitlality</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-healthcare-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-healthcare" type="button" role="tab"
                                        aria-controls="pills-healthcare" aria-selected="false">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/healthcare-icon.webp" alt="All"
                                            style="width: 24px; height: 24px; margin-right: 8px;">
                                        Healthcare</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img1.webp" class="img-fluid"
                                            alt="portfolio-img1">
                                        <div
                                            class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center text-white opacity-0 hover-opacity-100 transition-all">
                                            <span class="fs-4">
                                                <img src="Assets/images/location-icon.png" alt="Location" class="me-2"
                                                    style="width: 20px; height: 20px;">Chandigarh
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img2.webp" class="img-fluid"
                                            alt="portfolio-img2">
                                        <div
                                            class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center text-white opacity-0 hover-opacity-100 transition-all">
                                            <span class="fs-4">Overlay 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img3.webp" class="img-fluid"
                                            alt="portfolio-img3">
                                        <div
                                            class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center text-white opacity-0 hover-opacity-100 transition-all">
                                            <span class="fs-4">Overlay 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img4.webp" class="img-fluid"
                                            alt="portfolio-img4">
                                        <div
                                            class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center text-white opacity-0 hover-opacity-100 transition-all">
                                            <span class="fs-4">Overlay 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img4.webp" class="img-fluid"
                                            alt="portfolio-img4">
                                        <div
                                            class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center text-white opacity-0 hover-opacity-100 transition-all">
                                            <span class="fs-4">Overlay 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img3.webp" class="img-fluid"
                                            alt="portfolio-img4">
                                        <div
                                            class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center text-white opacity-0 hover-opacity-100 transition-all">
                                            <span class="fs-4">Overlay 4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-residential" role="tabpanel"
                        aria-labelledby="pills-residential-tab">.b..</div>
                    <div class="tab-pane fade" id="pills-commercial" role="tabpanel"
                        aria-labelledby="pills-commercial-tab">c...</div>
                    <div class="tab-pane fade" id="pills-hospitlality" role="tabpanel"
                        aria-labelledby="pills-commercial-tab">d...</div>
                    <div class="tab-pane fade" id="pills-healthcare" role="tabpanel"
                        aria-labelledby="pills-commercial-tab">e...</div>
                </div>
            </div>
        </section>

 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>


<?php get_footer(); ?>