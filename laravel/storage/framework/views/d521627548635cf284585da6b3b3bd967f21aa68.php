<?php $__env->startSection('content'); ?>
<?php if(Session::has('product')): ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">
    <img class="arrow" src="/img/icone-logo/delete.png"></img>
  </span>
  <p><?php echo e(Session::get('product')); ?></p>
</div>
<?php endif; ?>
<div class="container_admin">
  <h2 class="admin"> Add a product </h2>
  <form method="POST" action="<?php echo e(url('/admin/product/add')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
	  <fieldset>
		    <label for="name"><?php echo e(__('Name :')); ?></label>
				<input id="name" name="name" class="form <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type= "text" size="40" placeholder="Name and description" required autocomplete="name">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   			  <span class="invalid-feedback" role="alert">
   					<strong><?php echo e($message); ?></strong>
   				</span>
   			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="color"><?php echo e(__('Color :')); ?></label>
  	    <input id="color" name="color" class="form <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type= "text" min="0" placeholder="Color(s) of the product" required autocomplete="color">
        <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   			  <span class="invalid-feedback" role="alert">
   					<strong><?php echo e($message); ?></strong>
   				</span>
   			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="size"><?php echo e(__('Size :')); ?></label>
  		  <input id="size" name="size" class="form <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type= "text" min="0" placeholder="Size(s) of the product" required autocomplete="size">
        <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   			  <span class="invalid-feedback" role="alert">
   					<strong><?php echo e($message); ?></strong>
   				</span>
   			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="price"><?php echo e(__('Price :')); ?></label>
  		  <input id="price" name="price" class="form <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type= "number" min="0" placeholder="Price of the product" required autocomplete="price">
        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   			  <span class="invalid-feedback" role="alert">
   					<strong><?php echo e($message); ?></strong>
   				</span>
   			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="picture"><?php echo e(__('Picture :')); ?></label><br><br>
  		  <input id="picture" name="picture" class="picture <?php $__errorArgs = ['picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type= "file" accept="image/*" required multiple><br><br>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   			  <span class="invalid-feedback" role="alert">
   					<strong><?php echo e($message); ?></strong>
   				</span>
   			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="quantity"><?php echo e(__('Quantity :')); ?></label>
  		  <input id="quantity" name="quantity" class="form <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type= "number" min="0" placeholder="Quantity of the product" required autocomplete="quantity">
        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   			  <span class="invalid-feedback" role="alert">
   					<strong><?php echo e($message); ?></strong>
   				</span>
   			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

		 </fieldset>
    <div id="button">
       <input type="submit" class="Bouton" value="SUBMIT">
    </div><br>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/admin/products/create.blade.php ENDPATH**/ ?>