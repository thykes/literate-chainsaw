<?php snippet('header') ?>

<div class="tp-hero-5-area tp-hero-5-space fix">
  <div class="container-fluid">
    <div class="col-xl-12">
      <div class="tp-hero-5-content-box">
        <h4 class="tp-hero-5-title tp-char-animation"><?= $page->heroTitle()->or('Experience + <span>Creativity</span>')->kt() ?></h4>
        <p><?= $page->heroText()->or("We're an innovative global ui/ux design agency building high-end products and experiences that grow your business exponentially.")->kt() ?></p>
        <a class="tp-btn-black-square" href="<?= page('portfolio')->url() ?>">
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
          <?php foreach (page('projects')->children()->listed()->limit(3) as $project): ?>
          <div class="tp-project-5-thumb">
            <a href="<?= $project->url() ?>">
              <?php if ($project->cover()): ?>
              <img src="<?= $project->cover()->url() ?>" alt="<?= $project->title()->esc() ?>">
              <?php endif ?>
            </a>
          </div>
          <?php endforeach ?>
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
          <?php foreach ($page->categories()->split() as $category): ?>
          <span class="tp_fade_bottom"><?= esc($category) ?></span>
          <?php endforeach ?>
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

<!-- Additional sections as per your original HTML structure -->

<?php snippet('footer') ?>
