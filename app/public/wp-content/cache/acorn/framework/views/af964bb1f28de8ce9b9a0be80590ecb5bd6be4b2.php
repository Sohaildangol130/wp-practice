

<div class="theme-app d-flex flex-column">
  <div class="theme-wrap position-relative">
    <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <main id="main" class="main">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
  </div>
  <?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
  
  <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
    <aside class="sidebar">
      <?php echo $__env->yieldContent('sidebar'); ?>
    </aside>
  <?php endif; ?>
<?php /**PATH /Users/sohaildangol/Desktop/Projects/Wordpress/wppractice2/app/public/wp-content/themes/sage10/resources/views/layouts/app.blade.php ENDPATH**/ ?>