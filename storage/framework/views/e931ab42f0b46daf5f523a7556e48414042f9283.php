
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Slider</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#slider-slider-create'  data-load-to='#slider-slider-entry' data-datatable='#slider-slider-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#slider-slider-entry' data-href='<?php echo e(guard_url('slider/slider/0')); ?>'><i class="fa fa-times-circle"></i> <?php echo e(trans('app.close')); ?></button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            <?php echo Form::vertical_open()
            ->id('slider-slider-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('slider/slider')); ?>

            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  <?php echo e(trans('app.new')); ?>  [<?php echo trans('slider::slider.name'); ?>] </div>
                <?php echo $__env->make('slider::admin.slider.partial.entry', ['mode' => 'create'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>