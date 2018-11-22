    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#slider" data-toggle="tab"><?php echo trans('slider::slider.tab.name'); ?></a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#slider-slider-edit'  data-load-to='#slider-slider-entry' data-datatable='#slider-slider-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#slider-slider-entry' data-href='<?php echo e(guard_url('slider/slider')); ?>/<?php echo e($slider->getRouteKey()); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.cancel')); ?></button>

            </div>
        </ul>
        <?php echo Form::vertical_open()
        ->id('slider-slider-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('slider/slider/'. $slider->getRouteKey())); ?>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="slider">
                <div class="tab-pan-title">  <?php echo e(trans('app.edit')); ?>  <?php echo trans('slider::slider.name'); ?> [<?php echo $slider->name; ?>] </div>
                <?php echo $__env->make('slider::admin.slider.partial.entry', ['mode' => 'edit'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>