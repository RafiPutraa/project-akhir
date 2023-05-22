<div class="side-nav">
  <div class="side-box container pt-5" style="padding-left: 50px;">
      <div class="kategori">
          <b>Kategori</b>
          <ul>
            <li class="nav-item <?php echo e((request()->is('katalog')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog')); ?>">Lihat Semua</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/cpus')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/cpus')); ?>">CPU</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/cases')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/cases')); ?>">Casing PC</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/motherboards')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/motherboards')); ?>">Motherboard</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/gpus')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/gpus')); ?>">GPU</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/memories')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/memories')); ?>">Memory</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/power_supplies')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/power_supplies')); ?>">Power Supply (PSU)</a>
            </li>
            <li class="nav-item <?php echo e((request()->is('katalog/internal_storages')) ? 'active' : ''); ?>">
                <a href="<?php echo e(url('katalog/internal_storages')); ?>">Internal Storage</a>
            </li>
          </ul>
      </div>
      
  </div>
</div><?php /**PATH C:\laragon\www\bycom\resources\views/layouts/side-nav-katalog.blade.php ENDPATH**/ ?>