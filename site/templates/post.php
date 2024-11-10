<?php snippet('header') ?>

   <div id="smooth-wrapper">
      <div id="smooth-content">

         <main>

            <!-- hero area start -->
            <div class="blog-details-area blog-details-without-sidebar">
               <div class="blog-details-without-sidebar p-relative d-flex align-items-end pt-170 pb-70">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="blog-details-content z-index-5">
                              <span class="blog-details-meta text-black">Creative</span>
                              <?php if ($page->title()->isNotEmpty()): ?>
                              <h4 class="blog-details-title tp-text-black tp-char-animation"><?= $page->title()->html() ?></h4>
                              <?php endif ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container container-1800">
                  <div class="blog-details-thumb-wrap">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="blog-details-top-meta text-center">
                              <?php if ($author = $page->author()->toUser()): ?>
                              <span><?= $author->name()->esc() ?></span>
                              <?php endif ?>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="blog-details-top-meta text-center">
                              <?php if ($page->date()->isNotEmpty()): ?>
                              <span><?= $page->date()->toDate('d F, Y') ?></span>
                              <?php endif ?>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="blog-details-top-meta text-center">

                            <?php 
                            // Calculate reading time
                            $wordCount = str_word_count($page->text()->kirbytext()->value());
                            $readingTime = ceil($wordCount / 200);
                            ?>

                              <?php if ($readingTime): ?>
                              <span><?= $readingTime ?> min read</span>
                              <?php endif ?>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="blog-details-thumb">
                              <?php if ($featuredImage = $page->featuredImage()->toFile()): ?>
                              <img class="w-100" data-speed=".8" src="<?= $featuredImage->url() ?>" alt="<?= $featuredImage->alt()->esc() ?>">
                              <?php endif ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- hero area end -->

         <!-- postbox area start -->
         <section class="postbox__area tp-blog-sidebar-sticky-area pt-120 pb-120">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12">
                     <div class="postbox__wrapper">
                        <div class="row justify-content-center">
                           <div class="col-xl-8">

<?php $blocks = $page->text()->toBlocks(); ?>
<?php if ($blocks->isNotEmpty()): ?>
    <div class="blog-details-content tp_fade_bottom">
        <?php foreach ($blocks as $block): ?>
            <section class="block block-<?= $block->type() ?>">
                <?php snippet('blocks/' . $block->type(), ['block' => $block]) ?>
            </section>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No content blocks found.</p>
<?php endif; ?>







                                 <div class="blog-details-share-wrap mb-40">
                                    <div class="row">
                                       <div class="col-xl-8">
                                          <div class="blog-details-tag">
                                             <span>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15.371 9.92961L9.7597 15.5409C9.61433 15.6865 9.44171 15.8019 9.25169 15.8807C9.06168 15.9595 8.858 16 8.6523 16C8.44661 16 8.24293 15.9595 8.05292 15.8807C7.8629 15.8019 7.69027 15.6865 7.54491 15.5409L0.822266 8.82613V1H8.64839L15.371 7.72264C15.6626 8.01591 15.8262 8.41262 15.8262 8.82613C15.8262 9.23964 15.6626 9.63634 15.371 9.92961Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M4.73633 4.91333H4.74467" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             <?php if ($page->tags()->isNotEmpty()): ?>
                                              <?php foreach ($page->tags()->split(',') as $tag): ?>
                                                  <a href="<?= url($page->parent()->url() . '?tag=' . urlencode($tag)) ?>"><?= esc($tag) ?></a>
                                              <?php endforeach ?>
                                              <?php endif ?>
                                          </div>
                                       </div>
                                       <div class="col-xl-4">
                                          <div class="blog-details-share text-md-end text-start">
                                             <span>
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11.5004 5.2C12.6602 5.2 13.6004 4.2598 13.6004 3.1C13.6004 1.9402 12.6602 1 11.5004 1C10.3406 1 9.40039 1.9402 9.40039 3.1C9.40039 4.2598 10.3406 5.2 11.5004 5.2Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M3.1 10.0999C4.2598 10.0999 5.2 9.1597 5.2 7.9999C5.2 6.8401 4.2598 5.8999 3.1 5.8999C1.9402 5.8999 1 6.8401 1 7.9999C1 9.1597 1.9402 10.0999 3.1 10.0999Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M11.5004 14.9998C12.6602 14.9998 13.6004 14.0596 13.6004 12.8998C13.6004 11.74 12.6602 10.7998 11.5004 10.7998C10.3406 10.7998 9.40039 11.74 9.40039 12.8998C9.40039 14.0596 10.3406 14.9998 11.5004 14.9998Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M4.91211 9.05688L9.69311 11.8429" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M9.68611 4.15674L4.91211 6.94274" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             <a href="#">Share Post</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>




                                <div class="blog-details-author d-flex mb-60">
                                    <div class="blog-details-author-img">
                                        <?php if ($page->author()->isNotEmpty() && $author = $page->author()->toUser()): ?>
                                            <?php if ($author->profile_image()->toFile()): ?>
                                                <img src="<?= $author->profile_image()->toFile()->url() ?>" alt="<?= $author->name()->esc() ?>">
                                            <?php else: ?>
                                                <img src="assets/img/default-avatar.jpg" alt="Default Author">
                                            <?php endif ?>
                                        <?php else: ?>
                                            <img src="assets/img/default-avatar.jpg" alt="Default Author">
                                        <?php endif ?>
                                    </div>
                                    <div class="blog-details-author-content-wrap">
                                        <div class="blog-details-author-social text-end">
                                            <?php if ($author && $author->social_links()->isNotEmpty()): ?>
                                                <?php foreach ($author->social_links()->toStructure() as $link): ?>
                                                    <a href="<?= $link->url() ?>" target="_blank"><i class="fab fa-<?= strtolower($link->platform()) ?>"></i></a>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </div>
                                        <div class="blog-details-author-content">
                                            <h4 class="blog-details-author-title">
                                                <?php if ($author): ?>
                                                    <?= $author->name()->esc() ?>
                                                <?php else: ?>
                                                    Unknown Author
                                                <?php endif ?>
                                            </h4>
                                            <p>
                                                <?php if ($author && $author->bio()->isNotEmpty()): ?>
                                                    <?= $author->bio()->kirbytext() ?>
                                                <?php else: ?>
                                                    Author information not available.
                                                <?php endif ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                 <div class="blog-details-navigation-style mb-120">
                                    <div class="project-details-1-navigation d-flex justify-content-between align-items-center">
                                       <a class="project-details-1-prev" href="blog-details-without-sidebar.html">
                                          <i class="fa-sharp fa-regular fa-arrow-left"></i>
                                          <span>Prev</span>
                                       </a>
                                       <a href="#">
                                          <span>
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="17" cy="3" r="3" fill="#19191A"/>
                                                <circle cx="3" cy="3" r="3" fill="#19191A"/>
                                                <circle cx="3" cy="17" r="3" fill="#19191A"/>
                                                <circle cx="17" cy="17" r="3" fill="#19191A"/>
                                             </svg>
                                          </span>
                                       </a>
                                       <a class="project-details-1-next" href="blog-details-without-sidebar.html">
                                          <span>Next</span>
                                          <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                       </a>
                                    </div>
                                 </div>



                                 <div class="postbox__comment mb-100">
                                    <h3 class="postbox__comment-title">3 Comments</h3>
                                    <ul>
                                       <li>
                                          <div class="postbox__comment-box d-flex">
                                             <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                   <img src="assets/img/inner-blog/blog-details/avatar/avatar-3.jpg" alt="">
                                                </div>  
                                             </div>
                                             <div class="postbox__comment-text">
                                                <div class="postbox__comment-name d-flex justify-content-between align-items-center">
                                                   <h5>Farhan Firoz</h5>
                                                   <span class="post-meta"> April 8, 2022 at 7:38 am</span>
                                                </div>
                                                <p>Quisque est tortor, condimentum eget faucibus vel, condimentum quis felis. Nunc non orci augue. Pellentesque elementum gravida arcu.</p>
                                                <div class="postbox__comment-reply">
                                                   <a href="#">
                                                      <svg width="12" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M5 1L1 5L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M1 5.00024L9 5.00024C10.3333 5.00024 13 5.80025 13 9.00025" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                                      </svg> 
                                                      Reply
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="children">
                                          <div class="postbox__comment-box d-flex">
                                             <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                   <img src="assets/img/inner-blog/blog-details/avatar/avatar-4.jpg" alt="">
                                                </div>  
                                             </div>
                                             <div class="postbox__comment-text">
                                                <div class="postbox__comment-name d-flex justify-content-between align-items-center">
                                                   <h5>Anne Marie</h5>
                                                   <span class="post-meta"> April 8, 2022 at 7:38 am</span>
                                                </div>
                                                <p>Quisque est tortor, condimentum eget faucibus vel, condimentum quis
                                                   felis. Nunc non orci augue.</p>
                                                <div class="postbox__comment-reply">
                                                   <a href="#">
                                                      <svg width="12" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M5 1L1 5L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M1 5.00024L9 5.00024C10.3333 5.00024 13 5.80025 13 9.00025" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                                      </svg> 
                                                      Reply
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="postbox__comment-box d-flex">
                                             <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                   <img src="assets/img/inner-blog/blog-details/avatar/avatar-3.jpg" alt="">
                                                </div>  
                                             </div>
                                             <div class="postbox__comment-text">
                                                <div class="postbox__comment-name d-flex justify-content-between align-items-center">
                                                   <h5>Justin Case</h5>
                                                   <span class="post-meta"> April 8, 2022 at 7:38 am</span>
                                                </div>
                                                <p>Quisque est tortor, condimentum eget faucibus vel, condimentum quis felis. Nunc non orci augue. Pellentesque elementum gravida arcu.</p>
                                                <div class="postbox__comment-reply">
                                                   <a href="#">
                                                      <svg width="12" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M5 1L1 5L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M1 5.00024L9 5.00024C10.3333 5.00024 13 5.80025 13 9.00025" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                                      </svg> 
                                                      Reply
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="tp-postbox-details-form">
                                    <h3 class="tp-postbox-details-form-title">Leave a Reply</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <div class="tp-postbox-details-form-wrapper">
                                       <div class="tp-postbox-details-form-inner">
                                          <form action="#">
                                             <div class="row">
                                                <div class="col-xl-12">
                                                   <div class="tp-postbox-details-input-box">
                                                      <div class="tp-postbox-details-input">
                                                         <textarea id="msg" placeholder="Write your message here..."></textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xl-6">
                                                   <div class="tp-postbox-details-input-box">
                                                      <div class="tp-postbox-details-input">
                                                         <input type="text" placeholder="Farhan Firoz">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xl-6">
                                                   <div class="tp-postbox-details-input-box">
                                                      <div class="tp-postbox-details-input">
                                                         <input type="email" placeholder="liko@mail.com">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-xl-12">
                                                   <div class="tp-postbox-details-input-box">
                                                      <div class="tp-postbox-details-input">
                                                         <input type="text" placeholder="Website">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                       <div class="tp-postbox-details-suggetions mb-20">
                                          <div class="tp-postbox-details-remeber d-flex align-items-start">
                                             <input id="remeber" type="checkbox">
                                             <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                          </div>
                                       </div>
                                       <div class="tp-postbox-details-input-box">
                                          <button class="tp-btn-border-lg" type="submit">Post Comment</button>
                                       </div>
                                    </div>
                                 </div>


                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- postbox area end -->

            <div class="blog-details-realated-area grey-bg-2 pt-90 pb-40">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-xl-8">
                        <div class="blog-details-realated-title-box text-center mb-50">
                           <h3 class="blog-details-realated-title">Related posts</h3>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                        <div class="tp-blog-item">
                           <div class="tp-blog-thumb fix p-relative">
                              <img src="assets/img/home-05/blog/blog-1.jpg" alt="">
                              <div class="tp-blog-meta">
                                 <span>01. FEB. 2022</span>
                              </div>
                           </div>
                           <div class="tp-blog-content">
                              <span>Marketing / Strategy</span>
                              <h4 class="tp-blog-title-sm"><a href="blog-details.html">Future Business Ideas.</a></h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                        <div class="tp-blog-item">
                           <div class="tp-blog-thumb fix p-relative">
                              <img src="assets/img/home-05/blog/blog-2.jpg" alt="">
                              <div class="tp-blog-meta">
                                 <span>09. MAY. 2022</span>
                              </div>
                           </div>
                           <div class="tp-blog-content">
                              <span>Marketing / Strategy</span>
                              <h4 class="tp-blog-title-sm"><a href="blog-details.html">Start Unique Experience.</a></h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                        <div class="tp-blog-item">
                           <div class="tp-blog-thumb fix p-relative">
                              <img src="assets/img/home-05/blog/blog-3.jpg" alt="">
                              <div class="tp-blog-meta">
                                 <span>30. AUG. 2022</span>
                              </div>
                           </div>
                           <div class="tp-blog-content">
                              <span>Marketing / Strategy</span>
                              <h4 class="tp-blog-title-sm"><a href="blog-details.html">Is It Time To Rebrand?</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


         </main>


<?php snippet('footer') ?>
