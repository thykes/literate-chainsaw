<?php if ($block->images()->isNotEmpty()): ?>
    <div class="blog-details-thumb-box tp_fade_bottom">
        <div class="row">
            <?php foreach ($block->images()->toFiles() as $image): ?>
                <?php if ($image): ?>
                    <div class="col-md-6">
                        <div class="blog-details-thumb">
                            <img class="mb-20" src="<?= $image->url() ?>" alt="<?= $image->alt()->or('Gallery Image')->esc() ?>">
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
