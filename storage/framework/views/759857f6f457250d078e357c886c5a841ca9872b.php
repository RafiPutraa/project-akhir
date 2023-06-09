<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5 p-5" href="<?php echo e(url('admin/dashboard')); ?>"><img src="<?php echo e(asset('admin/images/logo-black.svg?v=').time()); ?>" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('admin/dashboard')); ?>"><img src="<?php echo e(asset('admin/images/logo-mini.svg?v=').time()); ?>" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?php echo e(asset('/storage/images/profile-images/admin/'.Auth::guard('admin')->user()->image)); ?>" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a href="<?php echo e(url('admin/logout')); ?>" class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav><?php /**PATH C:\laragon\www\bycom\resources\views/admin/layouts/navbar.blade.php ENDPATH**/ ?>