<?php 
/* Template Name: Home Page */

get_header(); 
?>

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
                                <a href="#" class="btn btn-primary btn-custom me-4 rounded-0">Explore Our Firm</a>
                                <a href="#" class="btn btn-secondary btn-custom rounded-0">How We Work</a>
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
                    <div class="col-md-10">
                        <div class="section-header">
                            <span class="common-subheading primary-color text-uppercase">The Portfolio Of Stories </span>
                            <h2 class="commom-heading">Imagine Your Dream, <br>
                                Beautifully Realised!</h2>
                            <p class="commom-description"> Let our innovative architecture and meticulous interior
                                design inspire your next venture, giving form and structure to your dream space.</p>
                        </div>
                        <div class="portfolio-tabs">
                            <ul class="nav nav-pills mb-3 gap-3 mt-5" id="pills-tab" role="tablist">
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
            <div class="container-fluid mt-5 p-0">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        <div class="swiper portfolio-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio-card position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img1.webp" class="img-fluid"
                                            alt="portfolio-img1">                                      
                                        <div class="overlay-text text-white">
                                            <h3>Sukhawas</h3>
                                            <h4>IDEATION</h4>
                                            <p>Showcasing a modern house interior that blends sleek design with functionality.</p>
                                             <p>Residential</p>
                                             <p>Chandigarh</p>
                                             <a href="javascript:void(0)" class="view project details-link">
                                                view project details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img2.webp" class="img-fluid"
                                            alt="portfolio-img2">
                                         <div class="overlay-text text-white">
                                            <h3>MODERN HOUSE INTERIORS</h3>
                                            <h4>IDEATION</h4>
                                            <p>Infusing practical aesthetics into the interior profile of the house.</p>
                                             <p>Commercial</p>
                                             <p>Gurugram</p>
                                             <a href="javascript:void(0)" class="view project details-link">
                                                view project details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img3.webp" class="img-fluid"
                                            alt="portfolio-img3">
                                       <div class="overlay-text text-white">
											<h3>RAEIN BASERA</h3>
											<h4>IDEATION</h4>
											<p>Creating sustainable and energy-efficient structures within the existing structure.</p>
											<p>Commercial</p>
											<p>Gurugram</p>
											<a href="javascript:void(0)" class="view project details-link">
												view project details</a>
										</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img4.webp" class="img-fluid"
                                            alt="portfolio-img4">
										<div class="overlay-text text-white">
											<h3>Anandlay</h3>
											<h4>IDEATION</h4>
											<p>Reform and revolutionise the design language and architecture of this residential space.</p>
											<p>Residential</p>
											<p>Chandigarh</p>
											<a href="javascript:void(0)" class="view project details-link">
												view project details</a>
										</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img4.webp" class="img-fluid"
                                            alt="portfolio-img4">
                                     <div class="overlay-text text-white">
											<h3>RAEIN BASERA</h3>
											<h4>IDEATION</h4>
											<p>Creating sustainable and energy-efficient structures within the existing structure.</p>
											<p>Commercial</p>
											<p>Gurugram</p>
											<a href="javascript:void(0)" class="view project details-link">
												view project details</a>
										</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card position-relative">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/portfolio-img3.webp" class="img-fluid"
                                            alt="portfolio-img4">
                                       <div class="overlay-text text-white">
											<h3>RAEIN BASERA</h3>
											<h4>IDEATION</h4>
											<p>Creating sustainable and energy-efficient structures within the existing structure.</p>
											<p>Commercial</p>
											<p>Gurugram</p>
											<a href="javascript:void(0)" class="view project details-link">
												view project details</a>
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
			  <div class="container">
					<div class="text-center pt-4">
						<a href="javascript:void(0)" class="btn btn-outline-primary rounded-0"> Show Me More Projects</a>
					</div>
				</div>
        </section>

        <!-- Reach Out section style SH -->
        <section class="common-section-spacing react-out-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="section-header">
                            <span class="common-subheading primary-color text-uppercase">Reach Out to us!
                            </span>
                            <h2 class="commom-heading text-white">Lets Discuss Your Project!</h2>
                            <p class="commom-description text-white"> Bring your design requirements to the table and we will make sure to breathe life into them, both visually and structurally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reach Out section style EH -->


<?php get_footer(); ?>