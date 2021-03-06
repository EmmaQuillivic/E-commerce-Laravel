<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'BeautyBoB')); ?></title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/96dba4a989.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/product.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/admin/admin.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/admin-index.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style1.css')); ?>" rel="stylesheet">

  </head>
  <body class="admin">
    <div class="container_header">
      <div class="left_header">
        <div class="name_header">
          <a class="name" href="<?php echo e(url('/catalog')); ?>">
            <?php echo e(config('app.name', 'BeautyBoB')); ?>

          </a>
        </div>
        <div class="logo_header">
          <img class="logo" src="<?php echo e(asset('img/icone-logo/logo.png')); ?>" draggable="false">
        </div>
      </div>
      <nav class="right_header">
        <ul class="user">
      <!-- Authentication Links -->
          <?php if(auth()->guard()->check()): ?>
          <li class="user firstname">
              <?php echo e(Auth::user()->firstname); ?>

          </li>
          <li class="user lastname">
              <?php echo e(Auth::user()->lastname); ?>

          </li>
          <div class="dropdown">
            <button class="dropbtn"><img class="arrow" src="<?php echo e(asset('img/icone-logo/arrow-down.png')); ?>" draggable="false"></img></button>
            <div class="submenu">
              <?php if(Auth::user()->admin == '1'): ?>
              <a href="<?php echo e(route('admin')); ?>">
                <?php echo e(__('Admin')); ?>

              </a>
              <?php endif; ?>
              <a href="<?php echo e(route('profil')); ?>">
                <?php echo e(__('Profil')); ?>

              </a>
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

              </a>
            </div>
          </div>
          <form class="nothing" id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
          </form>
          <li class="user icons">
            <a href="<?php echo e(route('Cart')); ?>">
              <img class="icon" src="<?php echo e(asset('img/icone-logo/cart.png')); ?>" draggable="false"></img>
              <span id="items" class="items">
              </span></a>
          </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
    <div class="container-menu">
      <nav class="vertical-menu">
        <ul class="menu">
          <p class="menu-title">Product</p>
          <a href="<?php echo e(url('/admin/product')); ?>">
            <li class="submenu-title">
              See
            </li>
          </a>
          <a href="<?php echo e(url('/admin/product/add')); ?>">
            <li class="submenu-title">
              Add
            </li>
          </a>
        </ul>
        <ul class="menu">
          <p class="menu-title">User</p>
          <a href="<?php echo e(url('/admin/user')); ?>">
            <li class="submenu-title">
              See
            </li>
          </a>
        </ul>
      </nav>
    </div>
    <main class="content">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
  </body>
  </html>
<?php /**PATH /Users/mma/Documents/laravel/resources/views/admin/app.blade.php ENDPATH**/ ?>