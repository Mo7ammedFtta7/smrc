<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  <?php echo trans('contact::contact.names'); ?> [<?php echo trans('contact::contact.text.preview'); ?>]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#contact-contact-entry' data-href='<?php echo guard_url('contact/contact/create'); ?>'><i class="fa fa-plus-circle"></i> <?php echo e(trans('app.new')); ?> </button>
        </div>
    </div>
</div>