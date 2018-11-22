
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Menu</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#create-menu' data-load-to='#menu-entry'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#menu-entry'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('create-menu')
        ->method('POST')
        ->action(guard_url('menu/menu')); ?>

        <?php echo Form::token(); ?>

            <div class="tab-content">
                <?php echo $__env->make('menu::admin.partial.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        <?php echo Form::close(); ?>

    </div>