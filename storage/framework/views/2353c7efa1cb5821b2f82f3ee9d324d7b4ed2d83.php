
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Menu</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-action="NEW" id="btn-menu-create" data-load-to='#menu-entry' data-href='<?php echo e(guard_url('menu/')); ?>/submenu/create?parent_id=<?php echo e($menu->getRouteKey()); ?>'><i class="fa fa-plus-circle"></i> Sub Menu</button>
                <?php if($menu->id): ?>
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT"  id="btn-menu-edit" data-load-to='#menu-entry' data-href='<?php echo e(guard_url('menu/')); ?>/submenu/<?php echo e($menu->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> <?php echo e(trans('app.edit')); ?></button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" id="btn-menu-delete" data-href='<?php echo e(guard_url('menu/menu')); ?>/<?php echo e($menu->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.delete')); ?></button>
                <?php endif; ?>

            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('menu-show')
        ->method('PUT')
        ->action(guard_url('menu/menu/'. $menu->getRouteKey())); ?>

        <div class="tab-content">
            <?php echo $__env->make('menu::admin.partial.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo Form::close(); ?>

    </div>
