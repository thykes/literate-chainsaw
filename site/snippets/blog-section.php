<div class="tp-blog-area pb-70">
  <div class="container container-1775">
    <div class="row">
      <?php 
      // Fetch the featured blog posts if they exist; otherwise, get the latest posts
      $blogs = page('blog')->children()->listed()->sortBy('date', 'desc')->limit(4);

      if ($blogs->isNotEmpty()):
        foreach ($blogs as $blog): 
      ?>
      <div class="col-xl-3 col-lg-6 col-md-6 mb-50">
        <div class="tp-blog-item tp_fade_bottom">
          <div class="tp-blog-thumb fix p-relative">
            <a href="<?= $blog->url() ?>">
              <?php if ($image = $blog->cover()): // Assuming there's a cover image field ?>
              <img src="<?= $image->resize(800, 600)->url() ?>" alt="<?= $blog->title()->esc() ?>">
              <?php endif ?>
              <div class="tp-blog-meta">
                <span><?= $blog->date()->toDate('d. M. Y') ?></span>
              </div>
            </a>
          </div>
          <div class="tp-blog-content">
            <span><?= $blog->category()->or('General')->esc() ?></span>
            <h4 class="tp-blog-title-sm"><a href="<?= $blog->url() ?>"><?= $blog->title()->esc() ?></a></h4>
          </div>
        </div>
      </div>
      <?php 
        endforeach;
      else: 
      ?>
      <p>No blog posts available at the moment.</p>
      <?php endif; ?>
    </div>
  </div>
</div>
