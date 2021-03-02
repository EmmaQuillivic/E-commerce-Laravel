<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/user.js')); ?>" defer></script>
<div class="container_user">
  <div class="user_account">
    <table>
      <p class="caption">Account User created</p>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td class="td_price"><?php echo e($user->id); ?></td>
          <td class="td_title"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
          <td class="td_title"><?php echo e($user->email); ?></td>
          <td class="td_title">Admin: <?php echo e($user->admin); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
  <div class="user_online">
    <p class="caption">Online Users</p>
    <table id="table">
    </table>
    <input type="submit" class="refresh" onclick="display_users()" value="Refresh">
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/admin/users/see.blade.php ENDPATH**/ ?>