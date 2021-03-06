<div class="content-wrapper">
    <section class="content-header">
        <h1>
        <i class="fa fa-dashboard"></i>
        <?php echo trans('app.dashboard'); ?>

        <small><?php echo trans('app.version'); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo guard_url('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo trans('app.home'); ?></a></li>
            <li class="active"><?php echo trans('app.dashboard'); ?></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo guard_url('page/page'); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pages</span>
                            <span class="info-box-number"><?php echo Page::count(); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo guard_url('calendar/calendar'); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Events</span>
                            <span class="info-box-number"><?php echo Calendar::count(); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo guard_url('revision/activity'); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-newspaper-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Activities</span>
                            <span class="info-box-number">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="<?php echo guard_url('user/user'); ?>">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Calender</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <?php echo Calendar::gadget('admin.calendar.gadget'); ?>

                    </div>
                    <div class="box-footer clearfix">
                        <a href="<?php echo guard_url('calendar/calendar'); ?>" class="btn btn-sm btn-info btn-flat new-client pull-right">View All Events</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tasks</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body with-border" style="height: 300px; overflow-y: auto;">
                        <?php echo Task::gadget('admin.task.gadget',10); ?>

                    </div>
                    <div class="box-footer clearfix">
                        <a href="<?php echo guard_url('task/task'); ?>" class="btn btn-sm btn-info btn-flat new-client pull-right">View All Tasks</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Activities</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body with-border" style="height: 300px; overflow-y: auto;">
                    </div>
                    <div class="box-footer clearfix">
                        <a href="<?php echo guard_url('revision/activity'); ?>" class="btn btn-sm btn-info btn-flat new-client pull-right">View All Activities</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Notifications</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body with-border" style="height: 300px; overflow-y: auto;">
                        
                    </div>
                    <div class="box-footer clearfix">
                            <a href="<?php echo guard_url('alert/notification'); ?>" class="btn btn-sm btn-info btn-flat new-client pull-right">View All Notifications</a>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
</div>

