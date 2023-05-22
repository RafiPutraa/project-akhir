<header>
    <a class="navbar-brand" href="<?php echo e(route('beranda')); ?>">
        <img src="<?php echo e(url('images/logo.png')); ?>" alt="Logo" class="d-inline-block align-text-top">
    </a>
    <nav class="navbar">
        <a href="<?php echo e(route('beranda')); ?>" class="<?php echo e((request()->is('/')) ? 'active' : ''); ?>">Beranda</a>
        <a href="<?php echo e(url('about')); ?>" class="<?php echo e((request()->is('about')) ? 'active' : ''); ?>">About</a>
        <a href="<?php echo e(url('simulasi-rakit-pc')); ?>" class="<?php echo e((request()->is('simulasi-rakit-pc*')) ? 'active' : ''); ?>">Simulasi Rakit PC</a>
        <a href="<?php echo e(url('katalog')); ?>" class="<?php echo e((request()->is('katalog*')) ? 'active' : ''); ?>">Katalog</a>
        <?php if(Route::has('login')): ?>
        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('keranjang')); ?>" class="<?php echo e((request()->is('keranjang*')) ? 'active' : ''); ?>">Keranjang</a>
        <?php endif; ?>
        <?php endif; ?>
            <!-- <div class="d-flex justify-content-center p-4">
              <div class="searchbar">
                <input class="search_input" type="text" name="" placeholder="Search...">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
              </div>
            </div> -->
        
    </nav>
    <?php if(Route::has('login')): ?>
            <div class="d-flex icon-nav">
                <?php if(auth()->guard()->check()): ?>
                <div class="dropdown">
                    <a href="#" class="fas fa-user user-profile icons"id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Profile</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('rakitanku')); ?>">Rakitanku</a></li>
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
                <?php else: ?>
                    <div class="menu login"><a href="<?php echo e(route('login')); ?>">Log In</a></div>
                    <div class="menu"><a href="<?php echo e(route('register')); ?>">Register</a></div>              
                <?php endif; ?>
            </div>
    <?php endif; ?> 
</header>
<!-- header section ends -->
<!-- home section starts  -->
<style>
body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    
    }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 45px;
    background-color: #353b48;
    border-radius: 15px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 23px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 250px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 25px;
    width: 25px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }

  </style><?php /**PATH C:\laragon\www\bycom\resources\views/layouts/header.blade.php ENDPATH**/ ?>