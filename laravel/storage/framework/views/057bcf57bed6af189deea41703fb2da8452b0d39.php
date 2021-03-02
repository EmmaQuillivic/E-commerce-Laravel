<?php $__env->startSection('content'); ?>
<div class="container_re">
	<h2> Sign up for free ! </h2><br>
  <form method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>

		<fieldset>
      <label for="firstname"><?php echo e(__('firstname :')); ?></label>
			<input id="firstname" type= "text" class="form <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="firstname" size="20" value="<?php echo e(old('firstname')); ?>" placeholder="Firstname" required autocomplete="firstname" autofocus>
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

			<label for="lastname"><?php echo e(__('lastname :')); ?></label>
	    <input id="lastname" type= "text" class="form <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lastname" size="30" value="<?php echo e(old('lastname')); ?>" placeholder="Lastname" required autocomplete="lastname">
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

			<label for="email"><?php echo e(__('E-Mail Address :')); ?></label>
			<input id="email" type= "Email" class="form <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="Email address" value="<?php echo e(old('email')); ?>" required autocomplete="email">
			<?php $__errorArgs = ['email'];
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

      <label for="password"><?php echo e(__('Password :')); ?></label>
  		<input id="password" type= "Password" class="form <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name= "password" placeholder="Password" required autocomplete="new-password">
			<?php $__errorArgs = ['password'];
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

      <label for="password-confirm"><?php echo e(__('Confirm Password :')); ?></label>
    	<input id="password-confirm" type= "Password" class="form" name= "password_confirmation" placeholder="Enter your password again" required autocomplete="new-password"> <br> <br>

		</fieldset>
    <p class="p_register">By clicking on Sign up, you agree to BeautyBob's Term and conditions of use.</p>

    <div id="button">
		 <input type="submit" class="Bouton" value="SIGN UP">
   </div>

   <div class="trait"></div>
  </form>
  <div class="zone_t">
  	<div id="text_1">
   		You have an account ? <br><br>
  		<a href="<?php echo e(route('login')); ?>"><button type="button" class="Bouton">LOG IN</button></a>
   	</div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/auth/register.blade.php ENDPATH**/ ?>