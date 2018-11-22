<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> <?php echo trans('settings::setting.name'); ?> <small> <?php echo trans('app.manage'); ?> <?php echo trans('settings::setting.names'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?> </a></li>
            <li class="active"><?php echo trans('settings::setting.names'); ?></li>
        </ol>
    </section>

    <section class="content">
        <!-- Main content -->
            <?php echo Form::vertical_open()
            ->id('settings-setting-create')
            ->method('POST')
            ->files('true')
            ->action(URL::to('admin/settings/setting')); ?>

        <div class="nav-tabs-custom">
        <!-- Nav tabs -->
            <ul class="nav nav-tabs primary">
                <li class="active"><a href="#main" data-toggle="tab">Main</a></li>
                <li><a href="#user" data-toggle="tab">User</a></li>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#settings-setting-create'  data-load-to='#settings-setting-entry' data-datatable='#settings-setting-list'><i class="fa fa-floppy-o"></i> <?php echo e(trans('app.save')); ?></button>
                    <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-times-circle"></i> <?php echo e(trans('app.close')); ?></button>
                </div>
            </ul>
            <div class="tab-content clearfix">
                <div class="tab-pane active" id="main">
                    <?php echo $__env->make('settings::admin.setting.partial.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <div class="tab-pane" id="user">
                    <?php echo $__env->make('settings::admin.setting.partial.user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>          
            </div>
        </div>
            <?php echo Form::close(); ?>

    </section>
</div>