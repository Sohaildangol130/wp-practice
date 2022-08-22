<header class="banner">
  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

    </nav>
  <?php endif; ?>
</header>
<?php /**PATH /Users/sohaildangol/Desktop/Projects/Wordpress/wppractice2/app/public/wp-content/themes/sage10/resources/views/sections/header.blade.php ENDPATH**/ ?>