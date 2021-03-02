<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/cookie.js')); ?>" defer></script>
<div class="container_catalog">
    <div class="titre_catalog">
      Bob's collection
    </div>
    <?php if(Session::has('message')): ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">
        <img class="arrow" src="/img/icone-logo/delete.png"></img>
      </span>
      <p><?php echo e(Session::get('message')); ?></p>
    </div>
    <?php endif; ?>
    <div class="catalog">
      <div class="pict">
        <div class="ligne">
          <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <article>
            <input id="id" name="id" type="hidden" value="<?php echo e($product->id); ?>">
            <input id="Number_products" name="Number_products" type="hidden" value="1">
            <input type="submit" onclick="AddProduct('<?php echo e($product->id); ?>','<?php echo e($product->Name); ?>', '<?php echo e($product->Image); ?>', '<?php echo e($product->Price); ?>', '<?php echo e(Auth::user()->id); ?>')" class="button_catalog" value="ADD TO BAG">
            <a href="<?php echo e(url('product/'.$product->id)); ?>">
              <img class="img_catalog" src="<?php echo e(asset('storage/img/bob/'. $product->Image)); ?>" draggable="false">
              <p id="name" class="p_des"> <?php echo e($product->Name); ?> </p>
              <p id="price" class="p_price"><?php echo e($product->Price); ?>$</p>
            </a>
          </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No Products found in here.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div id='cookie_container' hidden>
      <div id="txt_cookie">
        This website uses cookies to ensure you get the best experience on our website.
        <input id="button_cookie" onclick="CookieAgree()" type="submit" value="Got it !"></span>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/catalog.blade.php ENDPATH**/ ?>