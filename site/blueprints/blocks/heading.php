<?php if ($block->text()->isNotEmpty()): ?>
    <<?= $block->level()->or('h4') ?> class="blog-details-left-title">
        <?= $block->text()->html() ?>
    </<?= $block->level()->or('h4') ?>>
<?php endif; ?>
