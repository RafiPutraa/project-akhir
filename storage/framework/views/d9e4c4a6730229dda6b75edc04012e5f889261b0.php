

<?php $__env->startSection('main-content'); ?>
<section class="d-flex justify-content-between list-katalog">
    <?php echo $__env->make('layouts.side-nav-katalog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="list-content container" style="margin: 0px 30px;">
        <form class="d-flex justify-content" role="search" action="/katalog/search" method="GET">
            <input class="form-control py-3" type="search" placeholder="Cari Komponen PC" aria-label="Search" name="search">
        </form>

        <div class="pt-5 pb-5 box-category" id="casing-pc">
            <div class="container d-flex justify-content-between">
                <h3>Casing PC</h3>
                <a class="btn" href="<?php echo e(url('katalog/cases')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card position-relative">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/case/'. $dataComponent->image)); ?>" class="card-img-top" alt="case"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/cases/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="pt-5 pb-5 box-category" id="motherboard">
            <div class="container d-flex justify-content-between">
                <h3>Motherboard</h3>
                <a class="btn" href="<?php echo e(url('katalog/motherboards')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->motherboards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/motherboard/'. $dataComponent->image)); ?>" class="card-img-top" alt="motherboard"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/motherboards/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="pt-5 pb-5 box-category" id="cpu">
            <div class="container d-flex justify-content-between">
                <h3>CPU</h3>
                <a class="btn" href="<?php echo e(url('katalog/cpus')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->cpus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/cpu/'. $dataComponent->image)); ?>" class="card-img-top" alt="cpu"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/cpus/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="pt-5 pb-5 box-category" id="gpu">
            <div class="container d-flex justify-content-between">
                <h3>GPU</h3>
                <a class="btn" href="<?php echo e(url('katalog/gpus')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->gpus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/gpu/'. $dataComponent->image)); ?>" class="card-img-top" alt="gpu"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/gpus/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="pt-5 pb-5 box-category" id="ram">
            <div class="container d-flex justify-content-between">
                <h3>RAM</h3>
                <a class="btn" href="<?php echo e(url('katalog/memories')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->memories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/memory/'. $dataComponent->image)); ?>" class="card-img-top" alt="memory"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/memories/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="pt-5 pb-5 box-category" id="psu">
            <div class="container d-flex justify-content-between">
                <h3>PSU</h3>
                <a class="btn" href="<?php echo e(url('katalog/power_supplies')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->power_supplies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/psu/'. $dataComponent->image)); ?>" class="card-img-top" alt="power-supply"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/power_supplies/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="pt-5 pb-5 box-category" id="internal-storage">
            <div class="container d-flex justify-content-between">
                <h3>Internal Storage</h3>
                <a class="btn" href="<?php echo e(url('katalog/internal_storages')); ?>" role="button">Lihat Lainnya</a>
            </div>
            <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
                <?php $__currentLoopData = $data->internal_storages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <center><img src="<?php echo e(asset('storage/images/pc-components/internal-storage/'. $dataComponent->image)); ?>" class="card-img-top" alt="power-supply"></center>
                    <div class="card-body mt-3">
                        <h5 class="card-title"><?php echo e($dataComponent->name); ?></h5>
                        <p class="card-text"><?php echo e($dataComponent->price); ?></p>
                        <a href="<?php echo e(url('katalog/internal_storages/'.$dataComponent->id)); ?>" class="btn simulasi">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<script>
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    searchButton.addEventListener('click', () => {
        const inputValue = searchInput.value;
        alert(inputValue);
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laragon\www\projectakhir\resources\views/katalog/index.blade.php ENDPATH**/ ?>