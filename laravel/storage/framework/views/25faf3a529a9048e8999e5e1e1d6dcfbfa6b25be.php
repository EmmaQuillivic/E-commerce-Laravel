<?php $__env->startSection('content'); ?>
<?php if(Session::has('message')): ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">
    <img class="arrow" src="/img/icone-logo/delete.png"></img>
  </span>
  <p><?php echo e(Session::get('message')); ?></p>
</div>
<?php endif; ?>
<div class="container_product">
    <div class="product">
      <div class="photo_product">
        <img src="<?php echo e(asset('storage/img/bob/' . $product->Image)); ?>">
      </div>
      <div class="texte_product">
        <div class="name_product">
          <?php echo e($product->Name); ?>

        </div>
        <div class="price_product">
          <div class="text">
          Price of the product: <?php echo e($product->Price); ?>$
          </div>
        </div>
        <div class="color_product">
          <div class="text">
            Color: <?php echo e($product->Available_Colors); ?>

          </div>
        </div>
        <div class="size_product">
          <div class="text">
            Size: <?php echo e($product->Available_Size); ?>

          </div>
        </div>
        <?php if(auth()->user()->admin == '1'): ?>
        <div class="size_product">
          <div class="text">
            Qty available: <?php echo e($product->Quantity); ?>

          </div>
            <form action="<?php echo e(url('/product/update/'.$product->id)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <input type="number" class="qty" id="quantity" name="quantity" min="0" value="<?php echo e($product->Quantity); ?>">
              <input class="send" type="submit" value="EDIT">
            </form>
        </div>
        <?php endif; ?>
        <div class="size_product">
          <label for="Number_products"><?php echo e(__('Qty :')); ?></label>
          <input type="number" class="qty" id="Number_products" name="Number_products" min="1" max="<?php echo e($product->Quantity); ?>" value="1">
        </div>
        <div id="button">
          <input type="submit" onclick="AddProduct('<?php echo e($product->id); ?>','<?php echo e($product->Name); ?>', '<?php echo e($product->Image); ?>', '<?php echo e($product->Price); ?>', '<?php echo e(Auth::user()->id); ?>')" class="Bouton" value="ADD TO BAG">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/product.blade.php ENDPATH**/ ?>