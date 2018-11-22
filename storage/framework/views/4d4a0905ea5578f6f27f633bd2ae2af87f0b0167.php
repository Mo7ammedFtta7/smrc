<ul class="dropdown-menu">
<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($menu->hasChildren()): ?>
    <li class="<?php echo e($menu->active ?? ''); ?>">
        <a href="<?php echo e(trans_url($menu->url)); ?>" ><?php echo e($menu->name); ?> S</a>
        <?php echo $__env->make('menu::menu.sub.main', array('menus' => $menu->getChildren()), \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </li>
    <?php else: ?>
    <li  class="<?php echo e($menu->active ?? ''); ?>">
        <a href="<?php echo e(trans_url($menu->url)); ?>">
            <?php echo e($menu->name); ?>

        </a>
    </li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
