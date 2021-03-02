<?php $__env->startSection('content'); ?>
<div class="container_product">
  <div class="table">
    <?php if(Session::has('remove')): ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">
        <img class="arrow" src="/img/icone-logo/delete.png"></img>
      </span>
      <p class="remove"><?php echo e(Session::get('remove')); ?></p>
    </div>
    <?php endif; ?>
    <table class="table">
      <caption class="caption">Online products</caption>
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td class="td_photo"><img id="mini" src=<?php echo e(asset('storage/img/bob/'. $product->Image)); ?>></td>
          <td class="td_title"><?php echo e($product->Name); ?></td>
          <td class="td_price"><?php echo e($product->Price); ?>$</td>
          <td class="td_qty"><?php echo e(__('Qty :')); ?>

            <input type="number" class="qty" id="Number_products" name="Number_products" min="1" max="5" value="<?php echo e($product->Quantity); ?>">
          </td>
          <td class="td_qty">Size : <?php echo e($product->Available_Size); ?></td>
          <form class="nothing" method="POST" action="<?php echo e(route('Productremove', ['id' => $product->id])); ?>">
            <?php echo csrf_field(); ?>
            <td class="td_qty">
              <button class="delete"></button>
            </td>
          </form>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/admin/products/see.blade.php ENDPATH**/ ?>