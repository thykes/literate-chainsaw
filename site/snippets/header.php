<?php
/*
  This header snippet is reused in all templates and includes global elements like the navigation menu and preloader.
*/
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
   <meta name="description" content="<?= $site->description()->esc() ?>">

   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="<?= url('assets/img/favicon.png') ?>">

   <!-- CSS Files -->
   <?= css([
      'assets/css/bootstrap.css',
      'assets/css/animate.css',
      'assets/css/swiper-bundle.css',
      'assets/css/slick.css',
      'assets/css/magnific-popup.css',
      'assets/css/font-awesome-pro.css',
      'assets/css/spacing.css',
      'assets/css/custom-animation.css',
      'assets/css/main.css'
   ]) ?>
</head>
<body>

   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- pre loader area start -->
   <div id="loading" class="preloader-wrap">
      <div class="preloader-2 text-center">
         <span class="line line-1"></span>
         <span class="line line-2"></span>
         <span class="line line-3"></span>
         <span class="line line-4"></span>
         <span class="line line-5"></span>
         <span class="line line-6"></span>
         <span class="line line-7"></span>
         <span class="line line-8"></span>
         <span class="line line-9"></span>
         <div class="loader-text">Loading ...</div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- tp-offcanvus-area-end -->
   <div class="tp-offcanvas-area">
      <div class="tp-offcanvas-wrapper">
         <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
            <div class="tp-offcanvas-logo">
               <a href="index.html">
                  <img class="logo-1" src="assets/img/logo/logo.png" alt="">
                  <img class="logo-2" src="assets/img/logo/logo-white.png" alt="">
               </a>
            </div>
            <div class="tp-offcanvas-close">
               <button class="tp-offcanvas-close-btn">
                  <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
               </button>
            </div>
         </div>
         <div class="tp-offcanvas-main">
            <div class="tp-offcanvas-content">
               <h3 class="tp-offcanvas-title">Hello There!</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tp-offcanvas-gallery">
               <div class="row gx-2">
                  <div class="col-md-3 col-3">
                     <div class="tp-offcanvas-gallery-img fix">
                        <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-1.jpg" alt=""></a>
                     </div>
                  </div>
                  <div class="col-md-3 col-3">
                     <div class="tp-offcanvas-gallery-img fix">
                        <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-2.jpg" alt=""></a>
                     </div>
                  </div>
                  <div class="col-md-3 col-3">
                     <div class="tp-offcanvas-gallery-img fix">
                        <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-3.jpg" alt=""></a>
                     </div>
                  </div>
                  <div class="col-md-3 col-3">
                     <div class="tp-offcanvas-gallery-img fix">
                        <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-4.jpg" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-offcanvas-contact">
               <h3 class="tp-offcanvas-title sm">Information</h3>

               <ul>
                  <li><a href="tel:1245654">+ 4 20 7700 1007</a></li>
                  <li><a href="mailto:hello@diego.com">hello@diego.com</a></li>
                  <li><a href="#">Avenue de Roma 158b, Lisboa</a></li>
               </ul>
            </div>
            <div class="tp-offcanvas-social">
               <h3 class="tp-offcanvas-title sm">Follow Us</h3>
               <ul>
                  <li>
                     <a href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z"
                              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path
                              d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z"
                              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M2.50589 12.7494C4.57662 16.336 9.16278 17.5648 12.7494 15.4941C14.2113 14.65 15.2816 13.388 15.8962 11.9461C16.7895 9.85066 16.7208 7.37526 15.4941 5.25063C14.2674 3.12599 12.1581 1.82872 9.89669 1.55462C8.34063 1.366 6.71259 1.66183 5.25063 2.50589C1.66403 4.57662 0.435172 9.16278 2.50589 12.7494Z"
                              stroke="currentColor" stroke-width="1.5" />
                           <path
                              d="M12.7127 15.4292C12.7127 15.4292 12.0086 10.4867 10.5011 7.87559C8.99362 5.26451 5.28935 2.57155 5.28935 2.57155M5.68449 15.6124C6.79553 12.2606 12.34 8.54524 16.3975 9.43537M12.311 2.4082C11.1953 5.72344 5.75732 9.38453 1.71875 8.58915"
                              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M1 5.5715H6.33342C7.62867 5.5715 8.61917 6.56199 8.61917 7.85725C8.61917 9.15251 7.62867 10.143 6.33342 10.143H1.76192C1.30477 10.143 1 9.83823 1 9.38108V1.76192C1 1.30477 1.30477 1 1.76192 1H5.5715C6.86676 1 7.85725 1.99049 7.85725 3.28575C7.85725 4.58101 6.86676 5.5715 5.5715 5.5715H1Z"
                              stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" />
                           <path
                              d="M10.9062 7.09454H17.0016C17.0016 5.41832 15.6301 4.04688 13.9539 4.04688C12.2777 4.04688 10.9062 5.41832 10.9062 7.09454ZM10.9062 7.09454C10.9062 8.77076 12.2777 10.1422 13.9539 10.1422H15.2492"
                              stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                           <path d="M16.1125 1.44434H11.668" stroke="currentColor" stroke-width="1.2"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M12.75 13H5.25C3 13 1.5 11.5 1.5 9.25V4.75C1.5 2.5 3 1 5.25 1H12.75C15 1 16.5 2.5 16.5 4.75V9.25C16.5 11.5 15 13 12.75 13Z"
                              stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                           <path
                              d="M8.70676 5.14837L10.8006 6.40465C11.5543 6.90716 11.5543 7.66093 10.8006 8.16344L8.70676 9.41972C7.86923 9.92224 7.19922 9.50348 7.19922 8.5822V6.06964C7.19922 4.98086 7.86923 4.64585 8.70676 5.14837Z"
                              fill="currentColor" />
                        </svg>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->

   <!-- cart mini area start -->
   <div class="cartmini__area">
      <div class="cartmini__wrapper d-flex justify-content-between flex-column">
            <div class="cartmini__top-wrapper">
               <div class="cartmini__top p-relative">
                  <div class="cartmini__top-title">
                        <h4>Shopping cart</h4>
                  </div>
                  <div class="cartmini__close">
                        <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="cartmini__shipping">
               <p> Free Shipping for all orders over <span>$50</span></p>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>                   
               </div>
               <div class="cartmini__widget">
                  <div class="cartmini__widget-item">
                        <div class="cartmini__thumb">
                        <a href="shop-details.html">
                           <img src="assets/img/inner-blog/blog-sidebar/rc-post/rc-1.jpg" alt="">
                        </a>
                        </div>
                        <div class="cartmini__content">
                        <h5 class="cartmini__title"><a href="shop-details.html">Level Bolt Smart Lock</a></h5>
                        <div class="cartmini__price-wrapper">
                           <span class="cartmini__price">$46.00</span>
                           <span class="cartmini__quantity">x2</span>
                        </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                  </div>
               </div>
            </div>
            <div class="cartmini__checkout">
               <div class="cartmini__checkout-title mb-30">
                  <h4>Subtotal:</h4>
                  <span>$113.00</span>
               </div>
               <div class="cartmini__checkout-btn">
                  <a href="cart.html" class="tp-btn-black-2 text-center mb-10 w-100"> view cart</a>
                  <a href="checkout.html" class="tp-btn-black-2 text-center w-100"> checkout</a>
               </div>
            </div>
      </div>
   </div>
   <!-- cart mini area end -->

   <header class="tp-header-height z-index-5">

      <!-- header top area start -->
      <div id="header-sticky" class="tp-inner-header-area tp-inner-header-mob-space">
         <div class="container container-1800">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                  <div class="tp-inner-header-logo tp-header-logo">
                     <a class="ab-logo-1" href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
                     <a class="ab-logo-2" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 d-none d-xl-block">
                  <div class="tp-inner-header-right-wrap text-center">
                     <div class="tp-inner-header-menu header-main-menu">
                        <nav class="tp-main-menu-content">
                           <ul>
                              <li class="has-dropdown">
                                 <a href="index.html">Home</a>
                                 <div class="tp-submenu submenu tp-mega-menu">
                                    <div class="tp-menu-fullwidth">
                                       <div class="tp-homemenu-wrapper">
                                          <div class="row gx-25 row-cols-xl-6 row-cols-lg-2 row-cols-md-2 row-cols-1">
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index.html"><img
                                                            src="assets/img/menu/white-version/home-1.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index.html">MAIN HOME</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-2.html"><img
                                                            src="assets/img/menu/white-version/home-2.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-2.html">Fashion STUDIO</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-4.html"><img
                                                            src="assets/img/menu/white-version/home-3.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-4.html">CREATIVE AGENCY</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-3.html"><img
                                                            src="assets/img/menu/white-version/home-4.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-3.html">Digital Agency</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-5.html"><img
                                                            src="assets/img/menu/white-version/home-5.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-5.html">DESIGN STUDIO</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-shop.html"><img
                                                            src="assets/img/menu/white-version/home-6.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-shop.html">Minimal Shop</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-8.html"><img
                                                            src="assets/img/menu/white-version/home-7.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-8.html">DESIGN STUDIO</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-9.html"><img
                                                            src="assets/img/menu/white-version/home-8.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-9.html">showcase carousel</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-10.html"><img
                                                            src="assets/img/menu/white-version/home-9.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-10.html">INTERACTIVE LINKS</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-11.html"><img
                                                            src="assets/img/menu/white-version/home-10.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-11.html">wrapper slider</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="portfolio-showcase-2.html"><img
                                                            src="assets/img/menu/white-version/home-11.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="portfolio-showcase-2.html">showcase parallax</a>
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col homemenu">
                                                <div class="homemenu-thumb-wrap mb-20">
                                                   <div class="homemenu-thumb fix">
                                                      <a href="index-12.html"><img
                                                            src="assets/img/menu/white-version/home-12.jpg" alt=""></a>
                                                   </div>
                                                </div>
                                                <div class="homemenu-content text-center">
                                                   <h4 class="homemenu-title">
                                                      <a href="index-12.html">horizontal</a>
                                                   </h4>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="has-dropdown">
                                 <a href="#">Pages</a>
                                 <div class="tp-submenu submenu tp-mega-menu">
                                    <div class="tp-megamenu-wrapper">
                                       <div class="row gx-50">
                                          <div class="col-xl-8">
                                             <div class="tp-megamenu-list-box">
                                                <div class="row gx-50">
                                                   <div class="col-xl-8">
                                                      <div class="tp-megamenu-list">
                                                         <h4 class="tp-megamenu-title">LIST TYPES</h4>
                                                         <div class="tp-megamenu-list-wrap">
                                                            <ul>
                                                               <li><a href="about-us.html">ABOUT US</a></li>
                                                               <li><a href="faq.html">FAQ Page</a></li>
                                                               <li><a href="about-me.html">ABOUT ME</a></li>
                                                               <li><a href="price.html">Pricing</a></li>
                                                               <li><a href="team.html">Team Page</a></li>
                                                               <li><a href="brand.html">OUR CLIENTS</a></li>
                                                               <li><a href="team-details.html">Team Datails</a></li>
                                                               <li><a href="register.html">Register</a></li>
                                                               <li><a href="service.html">OUR SERVICES</a></li>
                                                               <li><a href="login.html">LogIn</a></li>
                                                               <li><a href="service-details.html">SERVICES DETAILS</a></li>
                                                               <li><a href="error.html">ERROR PAGE</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-xl-4">
                                                      <div class="tp-megamenu-list tp-megamenu-list-2">
                                                         <h4 class="tp-megamenu-title">Shop Page</h4>
                                                         <div class="tp-megamenu-list-wrap">
                                                            <ul>
                                                               <li><a href="shop-sidebar.html">Shop Page</a></li>
                                                               <li><a href="shop-details.html">shop details one</a></li>
                                                               <li><a href="shop-details-2.html">shop details TWO</a></li>
                                                               <li><a href="myaccount.html">my account</a></li>
                                                               <li><a href="cart.html">cart</a></li>
                                                               <li><a href="checkout.html">Checkout</a></li>
                                                               <li><a href="wishlist.html">Wishlist</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-4">
                                             <div class="tp-megamenu-shop-style">
                                                <div class="tp-shop-banner-left p-relative">
                                                   <div class="tp-shop-banner-thumb">
                                                      <img src="assets/img/menu/shop-menu/banner-1.jpg" alt="">
                                                   </div>
                                                   <div class="tp-shop-banner-content">
                                                      <h4 class="tp-shop-banner-title">Sale</h4>
                                                      <span>20% Off all Shoes</span>
                                                      <a class="tp-shop-btn" href="shop-details.html">Shop Now</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="has-dropdown">
                                 <a href="portfolio-random.html">Portfolio</a>
                                 <div class="tp-submenu submenu tp-mega-menu">
                                    <div class="tp-menu-fullwidth">
                                       <div class="tp-megamenu-portfolio p-relative">
                                          <div class="tp-megamenu-portfolio-banner">
                                             <img src="assets/img/menu/portfolio-menu/portfolio.png" alt="">
                                          </div>
                                          <div class="row gx-50">
                                             <div class="col-xxl-9 col-xl-10">
                                                <div class="tp-megamenu-list-box">
                                                   <div class="row gx-50">
                                                      <div class="col-xxl-5 col-xl-6">
                                                         <div class="tp-megamenu-list">
                                                            <h4 class="tp-megamenu-title">PORTFOLIO LIST</h4>
                                                            <div class="tp-megamenu-list-wrap tp-portfolio-menu-style">
                                                               <div class="row">
                                                                  <div class="col-lg-6">
                                                                     <ul>
                                                                        <li><a href="portfolio-standard.html">Standerd</a></li>
                                                                        <li><a href="index-10.html">Interactive</a></li>
                                                                        <li><a href="portfolio-random.html">random</a></li>
                                                                        <li><a href="portfolio-showcase-2.html">showcase parallax</a></li>
                                                                        <li><a href="portfolio-masonary.html">Masonry random</a></li>
                                                                        <li><a href="index-12.html">Vertical Carousel</a></li>
                                                                        <li><a href="portfolio-wrapper.html">wrapper</a></li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="col-lg-6">
                                                                     <ul>
                                                                        <li><a href="portfolio-showcase-1.html">horizontal</a></li>
                                                                        <li><a href="index-7.html">Image Slider</a></li>
                                                                        <li><a href="index-11.html">wrapper Slider</a></li>
                                                                        <li><a href="portfolio-showcase-1.html">parallax showcase</a></li>
                                                                     <li><a href="index-9.html">Perspective Slider</a></li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-xxl-3 col-xl-3">
                                                         <div class="tp-megamenu-list tp-megamenu-list-2 ml-20">
                                                            <h4 class="tp-megamenu-title">List Layouts</h4>
                                                            <div class="tp-megamenu-list-wrap">
                                                               <ul>
                                                                  <li><a href="portfolio-grid-col-2.html">two-columns</a></li>
                                                                  <li><a href="portfolio-grid-col-3.html">three-columns</a></li>
                                                                  <li><a href="portfolio-grid-col-3-fullwidth.html">three-columns Wide</a></li>
                                                                  <li><a href="portfolio-grid-col-4.html">four-columns</a></li>
                                                                  <li><a href="portfolio-grid-col-4-fullwidth.html">four-columns Wide</a></li>
                                                               </ul>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-xxl-3 col-xl-3">
                                                         <div class="tp-megamenu-list tp-megamenu-list-2 ml-20">
                                                            <h4 class="tp-megamenu-title">PORTFOLIO SINGLES</h4>
                                                            <div class="tp-megamenu-list-wrap">
                                                               <ul>
                                                                  <li><a href="portfolio-showcase-2-details.html">Creative</a></li>
                                                                  <li><a href="portfolio-details-1.html">images Small</a></li>
                                                                  <li><a href="portfolio-details-2.html">Sliding</a></li>
                                                                  <li><a href="portfolio-details-comparison.html">Image Comparison</a></li>
                                                                  <li><a href="portfolio-details-video.html">Video</a></li>
                                                                  <li><a href="portfolio-custom-light.html">CUSTOM LIGHT</a></li>
                                                                  <li><a href="portfolio-showcase-details.html">Gallery</a></li>
                                                                  <li><a href="portfolio-details-3.html">Mockups</a></li>
                                                               </ul>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xxl-3 col-xl-3 d-none d-xxl-block">
                                                <div class="tp-megamenu-portfolio-text">
                                                   <h4>60+</h4>
                                                   <span>Pre-built demo home page</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="has-dropdown">
                                 <a href="blog-list.html">Blog</a>
                                 <ul class="tp-submenu submenu">
                                    <li><a href="blog-modern.html">Modern</a></li>
                                    <li><a href="blog-classic.html">Classic Sidebar</a></li>
                                    <li><a href="blog-list.html">Minimal List</a></li>
                                    <li><a href="blog-details.html">Post Single</a></li>
                                    <li><a href="blog-details-without-sidebar.html">Post Without Sidebar</a></li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="contact.html">Contact</a>
                                 <ul class="tp-submenu submenu">
                                    <li><a href="contact-2.html">Contact</a></li>
                                    <li><a href="contact.html">Get IN touch</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                  <div class="tp-inner-header-right-action text-end">
                     <ul>
                        <li>
                           <div class="tp-inner-cart">
                              <a class="cartmini-open-btn" href="javascript:void(0)">
                                 <span class="p-relative">
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M5.14313 6.09765V5.22429C5.14313 3.19845 6.90815 1.20862 9.10223 1.01955C11.7156 0.785448 13.9195 2.68524 13.9195 5.05322V6.29573" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6.60789 19H12.4588C16.3789 19 17.081 17.5504 17.2858 15.7857L18.0171 10.3834C18.2804 8.18652 17.5978 6.39478 13.4339 6.39478H5.63274C1.46885 6.39478 0.786251 8.18652 1.04954 10.3834L1.7809 15.7857C1.98568 17.5504 2.68779 19 6.60789 19Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.9417 9.99608H12.9504" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6.11306 9.99608H6.12182" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <i>0</i>
                                 </span>
                              </a>
                           </div>
                        </li>
                        <li>
                           <div class="tp-inner-bar">
                              <button class="tp-offcanvas-open-btn">
                                 <span>
                                    <svg width="34" height="10" viewBox="0 0 34 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <rect y="0.00012207" width="34" height="2" fill="currentcolor"/>
                                       <rect y="8.00012" width="34" height="2" fill="currentcolor"/>
                                    </svg>                                          
                                 </span>
                              </button>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header top area end -->

   </header>