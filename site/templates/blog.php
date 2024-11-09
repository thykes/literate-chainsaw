<?php snippet('header') ?>

<div id="smooth-wrapper">
   <div id="smooth-content">
      <main>
         <div class="tp-blog-list-banner">
            <div class="tp-blog-list-bg tp-blog-list-bg-overlay" data-background="assets/img/inner-blog/blog-right-sidebar/blog-banner.jpg">
               <div class="container z-index">
                  <div class="row align-items-end">
                     <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="tp-blog-list-title-box">
                           <h2 class="tp-section-title fs-160 tp-char-animation">Read <br> All News</h2>
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="tp-blog-list-text text-start text-md-end">
                           <span>FEATURED STORIES</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="tp-blog-list-area mb-30">
            <div class="container container-1480">
               <div class="tp-blog-list-wrap">
                  <?php 
                  // Fetch all blog posts sorted by date in descending order
                  $posts = page('blog')->children()->listed()->sortBy('date', 'desc');

                  if ($posts->isNotEmpty()):
                     foreach ($posts as $post): 
                  ?>
                  <div class="tp-blog-list-item">
                     <div class="row">
                        <div class="col-xl-2 col-lg-2 tp-flex-end">
                           <div class="tp-blog-list-meta">
                              <span><?= $post->date()->toDate('d M, Y') ?></span>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-7">
                           <div class="tp-blog-list-content-wrap">
                              <div class="tp-blog-list-thumb anim-zoomin-wrap">
                                 <a href="<?= $post->url() ?>">
                                    <?php if ($cover = $post->cover()): ?>
                                       <img class="anim-zoomin" src="<?= $cover->resize(800)->url() ?>" alt="<?= $post->title()->esc() ?>">
                                    <?php endif ?>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5">    
                           <div class="tp-blog-list-content tp-flex-column">
                              <div class="tp-blog-list-title-wrap">
                                 <h4 class="tp-blog-list-title-sm"><a href="<?= $post->url() ?>"><?= $post->title()->esc() ?></a></h4>
                              </div>
                              <div class="tp-blog-list-link-wrap">
                                 <a class="tp-blog-list-link" href="<?= $post->url() ?>">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     endforeach;
                  else: 
                  ?>
                  <p>No blog posts available at the moment.</p>
                  <?php endif; ?>
                  
                  <!-- Pagination -->
                  <?php if ($posts->pagination()->hasPages()): ?>
                  <div class="col-12">
                     <div class="basic-pagination mt-80 text-center">
                        <nav>
                           <ul>
                              <?php if ($posts->pagination()->hasPrevPage()): ?>
                              <li><a href="<?= $posts->pagination()->prevPageURL() ?>"><i class="fa-regular fa-arrow-left icon"></i></a></li>
                              <?php endif; ?>

                              <?php foreach ($posts->pagination()->range(1) as $r): ?>
                              <li>
                                 <a href="<?= $posts->pagination()->pageURL($r) ?>" class="<?= $posts->pagination()->page() == $r ? 'current' : '' ?>">
                                    <?= $r ?>
                                 </a>
                              </li>
                              <?php endforeach; ?>

                              <?php if ($posts->pagination()->hasNextPage()): ?>
                              <li><a href="<?= $posts->pagination()->nextPageURL() ?>"><i class="fa-regular fa-arrow-right icon"></i></a></li>
                              <?php endif; ?>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>

         <!-- Text area start -->
         <div class="sv-big-text-area pb-80">
            <div class="container container-1530">
               <div class="sv-small-text-box d-flex justify-content-between">
                  <span>DIGITAL DESIGN EXPERIENCE</span>
                  <span>CREATIVE STUDIO</span>
               </div>
               <div class="sv-big-text-box">
                  <h4 class="sv-big-text tp-char-animation"><a href="contact.html">Get in Touch</a></h4>
               </div>
            </div>
         </div>
         <!-- Text area end -->
      </main>

<?php snippet('footer') ?>
