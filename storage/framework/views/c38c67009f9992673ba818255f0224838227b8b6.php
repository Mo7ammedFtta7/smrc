    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  <?php echo trans('slider::slider.name'); ?></a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#slider-slider-entry' data-href='<?php echo e(guard_url('slider/slider/create')); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?></button>
                <?php if($slider->id ): ?>
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#slider-slider-entry' data-href='<?php echo e(guard_url('slider/slider')); ?>/<?php echo e($slider->getRouteKey()); ?>/edit'><i class="fa fa-pencil-square"></i> <?php echo e(trans('app.edit')); ?></button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#slider-slider-entry' data-datatable='#slider-slider-list' data-href='<?php echo e(guard_url('slider/slider')); ?>/<?php echo e($slider->getRouteKey()); ?>' >
                <i class="fa fa-times-circle"></i> <?php echo e(trans('app.delete')); ?>

                </button>
                <?php endif; ?>
            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('slider-slider-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('slider/slider')); ?>

            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> <?php echo e(trans('app.view')); ?>   <?php echo trans('slider::slider.name'); ?>  [<?php echo $slider->name; ?>] </div>
                <div class="tab-pane active" id="details">
                    <?php echo $__env->make('slider::admin.slider.partial.entry', ['mode' => 'show'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div>