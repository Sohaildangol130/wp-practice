


<?php if( ! empty( $is_preview  ) ): ?>
    <?php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/test.png')->uri();
    ?>
    <img loading="lazy" src="<?php echo $imgUrl; ?>" style="width:100%;height:auto;">
<?php else: ?>
    <?php
        $blockId = $block['id'];
        $content = get_field('banner');
        $title = $content['title'] ?? false;
    ?>

    <?php if($title): ?>
        <h1> <?php echo e($title); ?> </h1>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/sohaildangol/Desktop/Projects/Wordpress/wppractice2/app/public/wp-content/themes/sage10/resources/views/blocks/test.blade.php ENDPATH**/ ?>