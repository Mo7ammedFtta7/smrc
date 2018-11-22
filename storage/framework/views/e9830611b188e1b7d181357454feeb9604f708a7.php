<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  <?php echo trans('slider::slider.names'); ?> [<?php echo trans('slider::slider.text.preview'); ?>]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#slider-slider-entry' data-href='<?php echo guard_url('slider/slider/create'); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?> </button>
        </div>
    </div>
</div>