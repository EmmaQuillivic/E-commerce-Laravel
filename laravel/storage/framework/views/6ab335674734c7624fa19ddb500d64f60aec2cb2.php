<?php $__env->startSection('content'); ?>
<div class="container_profil">
        <div class="titre_profil">
          Your Profil :
        </div>
        <?php if(Auth::user()->country == null): ?>
        <div class="profil">
          <div class="container_left">
            <div class="info">
              <div class="picture">
                <?php if(Auth::user()->Image != null): ?>
                  <img class="profil" src="<?php echo e(asset('storage/img/user/' . Auth::user()->Image)); ?>" draggable="false"></img>
                  <p> Do you want to change your profil picture ?</p>
                <?php else: ?>
                  <p> Add a profile picture ! <p>
                <?php endif; ?>
                  <form class="pict" enctype="multipart/form-data" action="<?php echo e(route('update_picture')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="file" name="Image" accept="image/*">
                    <input type="submit" value="EDIT">
                  </form>
              </div>
              <div class="user">
                  <p class="first">Your Name : <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></p>
              </div>
              <div class="user">
                <p id="option">Your Email : </p>
                <p id="user"> <?php echo e(Auth::user()->email); ?></p>
              </div>
              <?php if(Auth::user()->country != null): ?>
              <div class="user">
                <p id="option">Your Address : </p>
                <p id="user"><?php echo e(Auth::user()->country); ?>, <?php echo e(Auth::user()->city); ?>, <?php echo e(Auth::user()->address); ?></p>
              </div>
              <?php endif; ?>
          </div>
        </div>
        <div class="container_right">
              <form class="profil" enctype="multipart/form-data" action="<?php echo e(route('add_address')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <fieldset class="profiledit">
                  <div class="tittle">
                    <label>Please enter your delivery address</label>
                  </div>

                  <label for="country">Country</label>
                  <input class="form" placeholder="France" type="text" name="country" required>

                  <label for="city">City</label>
                  <input class="form" placeholder="Ivry Sur Seine" type="text" name="city" required>

                  <label for="address">Address</label>
                  <input class="form" placeholder="Avenue De La République" type="text" name="address" required>
                </fieldset>
                <div id="button">
                  <input class="Bouton" type="submit" value="ADD">
                </div>
              </form>
        </div>
        <?php else: ?>
        <div class="profil_2">
          <div class="container_left_bis">
            <div class="info">
              <div class="picture">
                <?php if(Auth::user()->Image != null): ?>
                  <img class="profil" src="<?php echo e(asset('storage/img/user/' . Auth::user()->Image)); ?>"></img>
                  <p> Do you want to change your profil picture ?</p>
                <?php else: ?>
                  <p> Add a profile picture ! <p>
                <?php endif; ?>
                <form class="pict" enctype="multipart/form-data" action="<?php echo e(route('update_picture')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <input type="file" name="Image" accept="image/*">
                </form>
              </div>
              <div class="user">
                  <p class="first">Your Name : <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></p>
              </div>
              <div class="user">
                <p id="option">Your Email : </p>
                <p id="user"> <?php echo e(Auth::user()->email); ?></p>
              </div>
              <?php if(Auth::user()->country != null): ?>
              <div class="user">
                <p id="option">Your Address : </p>
                <p id="user"><?php echo e(Auth::user()->country); ?>, <?php echo e(Auth::user()->city); ?>, <?php echo e(Auth::user()->address); ?></p>
              </div>
              <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mma/Documents/laravel/resources/views/profil.blade.php ENDPATH**/ ?>