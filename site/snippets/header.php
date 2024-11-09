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

<body id="body" class="tp-magic-cursor tp-smooth-scroll">

   <!-- Preloader start -->
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
   <!-- Preloader end -->

   <!-- Back to top button start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- Back to top button end -->

   <!-- Header start -->
   <header class="tp-header-2-area tp-header-2-space tp-transparent">
      <div class="container container-1840">
         <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
               <div class="tp-header-logo">
                  <a class="logo-1" href="<?= $site->url() ?>"><img src="<?= url('assets/img/logo/logo.png') ?>" alt="Logo"></a>
                  <a class="logo-2" href="<?= $site->url() ?>"><img src="<?= url('assets/img/logo/logo-white.png') ?>" alt="Logo"></a>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
               <div class="tp-header-2-menu-bar text-end text-sm-center">
                  <button class="tp-offcanvas-open-btn">
                     <span></span>
                     <span></span>
                  </button>
                  <!-- Navigation -->
                  <nav class="tp-main-menu-content d-none">
                     <ul>
                        <?php foreach ($site->children()->listed() as $item): ?>
                        <li><a href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a></li>
                        <?php endforeach ?>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 d-none d-sm-block">
               <div class="tp-header-2-btn-box text-end">
                  <div class="tp-header-2-button">
                     <a class="tp-btn-animation" href="<?= $site->url('contact') ?>">
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                        <span>Get In Touch</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header end -->
