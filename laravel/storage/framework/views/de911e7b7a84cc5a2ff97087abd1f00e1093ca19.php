<?php $__env->startSection('content'); ?>
<div class="container_l">
  <h2> Log to your account ! </h2><br>
  <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>

    <fieldset>
      <label for="email"><?php echo e(__('E-Mail Address :')); ?></label>
      <input id="email" type="email" class="form <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email address" required autocomplete="email" autofocus>
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
      <input id="password" type="password" class="form-password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Password" required autocomplete="current-password">
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

    </fieldset>
    <div class="link">
      <?php if(Route::has('password.request')): ?>
        <a href="<?php echo e(route('password.request')); ?>">
          <?php echo e(__('Forgot Your Password?')); ?>

        </a>
      <?php endif; ?>
    </div>

    <div id="button">
      <input type="submit" class="Bouton" value="<?php echo e(__('LOGIN')); ?>">
    </div>

    <div class="trait"></div>
  </form>
  <div class="zone_t">
    <div id="text_1">
      You don't have an account ? <br><br>
      <a href="<?php echo e(route('register')); ?>"><button type="button" class="Bouton">SIGN UP</button></a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/auth/login.blade.php ENDPATH**/ ?>