<?php snippet('header') ?>

<div id="smooth-wrapper">
   <div id="smooth-content">
      <main>
         <!-- Hero Section -->
         <div class="tp-blog-list-banner">
            <div class="tp-blog-list-bg tp-blog-list-bg-overlay" data-background="<?= $page->featuredImage()->isNotEmpty() ? $page->featuredImage()->toFile()->url() : 'assets/img/inner-blog/blog-right-sidebar/blog-banner.jpg' ?>">
               <div class="container z-index">
                  <div class="row align-items-end">
                     <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="tp-blog-list-title-box">
                           <h2 class="tp-section-title fs-160 tp-char-animation"><?= $page->headline()->isNotEmpty() ? $page->headline() : 'Read <br> All News' ?></h2>
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="tp-blog-list-text text-start text-md-end">
                           <span><?= $page->description()->isNotEmpty() ? $page->description() : 'FEATURED STORIES' ?></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Blog Post Area -->
         <div class="tp-blog-list-area mb-30">
            <div class="container container-1480">
               <div class="tp-blog-list-wrap">
                  <?php 
                  // Fetch all blog posts sorted by date in descending order
                  $posts = $page->children()->listed()->sortBy('date', 'desc');

                  if ($posts && $posts->isNotEmpty()):
                     foreach ($posts as $post): 
                  ?>
                  <!-- Post Item -->
                  <div class="tp-blog-list-item">
                     <div class="row">
                        <div class="col-xl-2 col-lg-2 tp-flex-end">
                           <div class="tp-blog-list-meta">
                              <span><?= $post->date()->isNotEmpty() ? $post->date()->toDate('d M, Y') : 'No Date' ?></span>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-7">
                           <div class="tp-blog-list-content-wrap">
                              <div class="tp-blog-list-thumb anim-zoomin-wrap">
                                 <a href="<?= $post->url() ?>">
                                    <?php if ($cover = $post->cover()->toFile()): ?>
                                       <img class="anim-zoomin" src="<?= $cover->resize(800)->url() ?>" alt="<?= $post->title()->esc() ?>">
                                    <?php else: ?>
                                       <img class="anim-zoomin" src="assets/img/default-cover.jpg" alt="Default Cover">
                                    <?php endif ?>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5">    
                           <div class="tp-blog-list-content tp-flex-column">
                              <div class="tp-blog-list-title-wrap">
                                 <h4 class="tp-blog-list-title-sm"><a href="<?= $post->url() ?>"><?= $post->title()->isNotEmpty() ? $post->title()->esc() : 'Untitled Post' ?></a></h4>
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
                  <?php if ($posts && $posts->pagination()->hasPages()): ?>
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

         <!-- Text Area -->
         <div class="sv-big-text-area pb-80">
            <div class="container container-1530">
               <div class="sv-small-text-box d-flex justify-content-between">
                  <span>DIGITAL DESIGN EXPERIENCE</span>
                  <span>CREATIVE STUDIO</span>
               </div>
               <div class="sv-big-text-box">
                  <h4 class="sv-big-text tp-char-animation"><a href="<?= url('contact') ?>">Get in Touch</a></h4>
               </div>
            </div>
         </div>
      </main>

<?php snippet('footer') ?>
