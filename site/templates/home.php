<?php snippet('header') ?>

<div class="tp-hero-5-area tp-hero-5-space fix">
  <div class="container-fluid">
    <div class="col-xl-12">
      <div class="tp-hero-5-content-box">
        <h4 class="tp-hero-5-title tp-char-animation"><?= $page->heroTitle()->or('Experience + <span>Creativity</span>')->kt() ?></h4>
        <p><?= $page->heroText()->or("We're an innovative global ui/ux design agency building high-end products and experiences that grow your business exponentially.")->kt() ?></p>
        <a class="tp-btn-black-square" href="#">
          View Our Works
          <span>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 11L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M1 1H11V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
        </a>
      </div>
      <div class="tp-project-5-wrap d-flex align-items-end justify-content-center justify-content-md-end">
        <div class="tp-project-5-text">
          <span><?= $page->recentProjectText()->or('RECENT PROJECT')->esc() ?></span>
        </div>
        <div class="tp-project-5-thumb-wrap d-flex align-items-center">
          <p>No projects available at the moment.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="tp-about-5-area black-bg pt-150 pb-120">
  <div class="container container-1560">
    <div class="row">
      <div class="col-xl-12">
        <div class="tp-about-5-title-box pb-90">
          <h4 class="tp-about-5-title p-relative tp_fade_bottom">
            <span class="tp-about-5-subtitle tp_fade_left"><?= $page->aboutSubtitle()->or('140+ projects closed')->esc() ?></span>
            <span class="text-space"></span>
            <?= $page->aboutTitle()->or('As a digital designer, I focus on producing top notch and impactful digital experiences.')->kt() ?>
          </h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="tp-about-5-category">
          <?php if ($page->categories()->isNotEmpty()): ?>
            <?php foreach ($page->categories()->split() as $category): ?>
            <span class="tp_fade_bottom"><?= esc($category) ?></span>
            <?php endforeach ?>
          <?php else: ?>
            <p class="tp_fade_bottom">No categories available.</p>
          <?php endif ?>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="tp-about-5-text">
          <p class="mb-30 tp_fade_bottom"><?= $page->aboutText1()->kt() ?></p>
          <p class="mb-30 tp_fade_bottom"><?= $page->aboutText2()->kt() ?></p>
          <p class="tp_fade_bottom"><?= $page->aboutText3()->kt() ?></p>
        </div>
      </div>
    </div>
  </div>
</div>




         <!-- portfolio area start -->
         <div class="tp-project-5-2-area tp-project-5-2-pt pb-130 black-bg">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-line-text-wrap tp-line-text-wrap-2">
                     <div class="swiper tp-line-text-slide" data-sliderSpeed="400" data-autoPlay="true">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-line-content">
                                 <h4 class="tp-project-5-2-title">
                                    Have A Great Project ?
                                 </h4>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-line-content">
                                 <h4 class="tp-project-5-2-title">
                                    <span class="d-none d-md-inline-block">
                                    </span>
                                    Have A Great Project ?
                                 </h4>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-line-content">
                                 <h4 class="tp-project-5-2-title">
                                    Have A Great Project ?
                                 </h4>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-line-content">
                                 <h4 class="tp-project-5-2-title">
                                    Have A Great Project ?
                                 </h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row gx-140">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-project-5-2-thumb fix mb-140 p-relative not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="portfolio-details-1.html">
                           <span class="tp_img_reveal">
                              <div class="tp_img_reveal">
                                 <img src="assets/img/home-05/project/project-4.jpg" alt="">
                              </div>
                           </span>
                           <div class="tp-project-5-2-category tp_fade_anim">
                              <span>Branding</span>
                           </div>
                           <div class="tp-project-5-2-content tp_fade_anim">
                              <span class="tp-project-5-2-meta">2024</span>
                              <h4 class="tp-project-5-2-title-sm">Art Direction</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-project-5-2-thumb fix mb-140 p-relative not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="portfolio-details-1.html">
                           <span class="tp_img_reveal">
                              <div class="tp_img_reveal">
                                 <img src="assets/img/home-05/project/project-5.jpg" alt="">
                              </div>
                           </span>
                           <div class="tp-project-5-2-category tp_fade_anim">
                              <span>Branding</span>
                           </div>
                           <div class="tp-project-5-2-content tp_fade_anim">
                              <span class="tp-project-5-2-meta">2024</span>
                              <h4 class="tp-project-5-2-title-sm">Petit Navire</h4>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-project-5-2-thumb fix mb-140 p-relative not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="portfolio-details-1.html">
                           <span class="tp_img_reveal">
                              <div class="tp_img_reveal">
                                 <img src="assets/img/home-05/project/project-6.jpg" alt="">
                              </div>
                           </span>
                           <div class="tp-project-5-2-category tp_fade_anim">
                              <span>Branding</span>
                           </div>
                           <div class="tp-project-5-2-content tp_fade_anim">
                              <span class="tp-project-5-2-meta">2024</span>
                              <h4 class="tp-project-5-2-title-sm">Big dream</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-project-5-2-thumb fix mb-140 p-relative not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="portfolio-details-1.html">
                           <span class="tp_img_reveal">
                              <div class="tp_img_reveal">
                                 <img src="assets/img/home-05/project/project-7.jpg" alt="">
                              </div>
                           </span>
                           <div class="tp-project-5-2-category tp_fade_anim">
                              <span>Branding</span>
                           </div>
                           <div class="tp-project-5-2-content tp_fade_anim">
                              <span class="tp-project-5-2-meta">2024</span>
                              <h4 class="tp-project-5-2-title-sm">The Stage</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-project-5-2-thumb fix mb-110 p-relative not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="portfolio-details-1.html">
                           <span class="tp_img_reveal">
                              <div class="tp_img_reveal">
                                 <img src="assets/img/home-05/project/project-8.jpg" alt="">
                              </div>
                           </span>
                           <div class="tp-project-5-2-category tp_fade_anim">
                              <span>Creative</span>
                           </div>
                           <div class="tp-project-5-2-content tp_fade_anim">
                              <span class="tp-project-5-2-meta">2022</span>
                              <h4 class="tp-project-5-2-title-sm">Big dream</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-project-5-2-thumb fix mb-110 p-relative not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="portfolio-details-1.html">
                           <span class="tp_img_reveal">
                              <div class="tp_img_reveal">
                                 <img src="assets/img/home-05/project/project-9.jpg" alt="">
                              </div>
                           </span>
                           <div class="tp-project-5-2-category tp_fade_anim">
                              <span>Concept</span>
                           </div>
                           <div class="tp-project-5-2-content tp_fade_anim">
                              <span class="tp-project-5-2-meta">2022</span>
                              <h4 class="tp-project-5-2-title-sm">Sed Lectus</h4>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-projct-5-2-btn-box d-flex justify-content-center">
                        <div class="tp-hover-btn-wrapper">
                           <a class="tp-btn-circle tp-hover-btn-item tp-hover-btn" href="portfolio-details-1.html">
                              <span class="tp-btn-circle-text">More<br>Projects</span>
                              <span class="tp-btn-circle-icon">
                                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 11L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                    <path d="M1 1H11V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                 </svg>
                              </span>
                              <i class="tp-btn-circle-dot"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- portfolio area end -->

         <!-- counter area start -->
         <div class="slide-funfact-height slide-funfact p-relative d-flex align-items-center justify-content-center">
            <div class="img-marq slide-funfact-overlay">
               <div class="middle-shadow">
                  <span></span>
               </div>
               <div class="slide-img-left">
                  <div class="box">
                     <img src="assets/img/home-05/marque/marque-1.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-2.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-3.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-4.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-5.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-6.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-7.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-8.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-9.jpg" alt="">
                  </div>
                  <div class="box">
                     <img src="assets/img/home-05/marque/marque-1.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-2.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-3.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-4.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-5.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-6.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-7.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-8.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-9.jpg" alt="">
                  </div>
               </div>
               <div class="slide-img-right">
                  <div class="box">
                     <img src="assets/img/home-05/marque/marque-1.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-2.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-3.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-4.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-5.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-6.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-7.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-8.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-9.jpg" alt="">
                  </div>
                  <div class="box">
                     <img src="assets/img/home-05/marque/marque-1.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-2.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-3.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-4.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-5.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-6.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-7.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-8.jpg" alt="">
                     <img src="assets/img/home-05/marque/marque-9.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="slide-funfact-wrap">
               <div>
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                           <div class="slide-funfact-item text-center">
                              <h4><i data-purecounter-duration="1" data-purecounter-end="235" class="purecounter">0</i>+</h4>
                              <span>Projects Finished</span>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                           <div class="slide-funfact-item text-center">
                              <h4><i data-purecounter-duration="1" data-purecounter-end="12" class="purecounter">0</i>+</h4>
                              <span>Years of Experience</span>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                           <div class="slide-funfact-item text-center">
                              <h4><i data-purecounter-duration="1" data-purecounter-end="140" class="purecounter">0</i>+</h4>
                              <span>Clients Worldwide</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- counter area end -->

         <!-- mission area end -->
         <div class="tp-mission-area pt-120 pb-120 mb-110 black-bg p-relative">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-mission-title-box mb-80 text-center">
                        <h4 class="tp-about-5-title tp_fade_bottom p-relative">
                           <span class="tp-about-5-subtitle d-none d-lg-block tp_fade_left">Our vision</span>
                           We Help Create <br> and Supercharge Brands
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-mission-thumb">
                        <img data-speed=".8" src="assets/img/home-05/mission/mission-1.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="tp-mission-content">
                        <p class="tp_fade_bottom">
                           This is where data, know-how, and creativity meet design and walk the path to success.
                           Thinking as one, acting as one; always by your side pushing boundaries. Our highly
                           specialized approach offers a wide spectrum of services.!
                        </p>
                        <div class="tp-hover-btn-wrapper tp_fade_bottom">
                           <a class="tp-btn-circle-2 tp-hover-btn-item tp-hover-btn" href="about-us.html">
                              <span>
                                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 11L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                    <path d="M1 1H11V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                 </svg>
                                 <br>
                                 About us
                              </span>
                              <i class="tp-btn-circle-dot"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-mission-right-thumb">
               <img data-speed=".9" src="assets/img/home-05/mission/mission-2.jpg" alt="">
            </div>
         </div>
         <!-- mission area end -->

         <!-- service area start -->
         <div class="tp-service-5-area pt-120 pb-70">
            <div class="container container-1775">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-service-5-title-box mb-90">
                        <h4 class="tp-service-5-title p-relative tp_fade_right">
                           <span class="tp-service-5-subtitle tp_fade_left">SERVICES</span>
                           <span class="text-space"></span>
                           Nullam posuere rhoncus elementum. Nullam lacinia <br>
                           urna blandit iaculis sagittis
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="tp-service-5-wrap">
                  <div class="row">
                     <div class="col-xxl-3"></div>
                     <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-service-5-item tp_fade_bottom space-1">
                           <div class="tp-service-4-icon">
                              <img src="assets/img/home-01/service/service-icon-2.png" alt="">
                           </div>
                           <div class="tp-service-4-content">
                              <h4 class="tp-service-4-title-sm tp-text-black"><a href="service.html">Branding</a></h4>
                              <p>Branding is one of the most important
                                 ingredients for the success of any
                                 business.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-service-5-item tp_fade_bottom space-2">
                           <div class="tp-service-4-icon">
                              <img src="assets/img/home-01/service/service-icon-1.png" alt="">
                           </div>
                           <div class="tp-service-4-content">
                              <h4 class="tp-service-4-title-sm tp-text-black"><a href="service.html">Website design</a></h4>
                              <p>The perfect cocktail should still look and taste
                                 perfect no matter the size of the glass you serve it in.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-service-5-item tp_fade_bottom space-3">
                           <div class="tp-service-4-icon">
                              <img src="assets/img/home-01/service/service-icon-3.png" alt="">
                           </div>
                           <div class="tp-service-4-content">
                              <h4 class="tp-service-4-title-sm tp-text-black"><a href="service.html">Marketing</a></h4>
                              <p>We take that same approach with the
                                 apps & websites we create. you go there
                                 because of the overall experience. </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- service area end -->

         <!-- blog area start -->
         
          <?php snippet('blog-section') ?>

         <!-- blog area end -->

      </main>



<?php snippet('footer') ?>
