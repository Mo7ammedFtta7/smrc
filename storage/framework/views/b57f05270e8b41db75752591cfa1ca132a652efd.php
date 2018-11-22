
<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($menu->has_role): ?>
    <?php if($menu->hasChildren()): ?>
    <li class="treeview <?php echo e($menu->active ?? ''); ?>">
        <a href="<?php echo e(trans_url($menu->url)); ?>" >
            <i class="<?php echo e($menu->icon ?? 'fa fa-angle-double-right'); ?>"></i> <span><?php echo e($menu->name); ?></span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <?php echo $__env->make('menu::menu.sub.admin', array('menus' => $menu->getChildren()), \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </li>
    <?php else: ?>
    <li  <?php echo e($menu->active ?? ''); ?>>
        <a href="<?php echo e(trans_url($menu->url)); ?>">
            <i class="<?php echo e($menu->icon ?? 'fa fa-angle-double-right'); ?>"></i>
            <span><?php echo e($menu->name); ?></span>
        </a>
    </li>
    <?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

