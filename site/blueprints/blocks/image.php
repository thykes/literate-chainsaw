<div class="blog-details-thumb-box">
    <div class="row">
        <div class="col-xl-12">
            <div class="blog-details-thumb">
                <?php if ($image = $block->image()->toFile()): ?>
                    <img class="w-100" src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
                <?php else: ?>
                    <p>No image available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
