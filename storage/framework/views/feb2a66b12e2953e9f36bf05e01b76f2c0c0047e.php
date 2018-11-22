<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(Trans::to('admin')); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="<?php echo theme_asset('img/logo/logo-white.svg'); ?>" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="<?php echo theme_asset('img/logo/logo-big-white.svg'); ?>" alt=""></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"> <?php echo Message::count('Inbox'); ?></span>
                </a>
                <?php echo Message::gadget('admin.message.drop'); ?>

                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">              
                        <?php echo Calendar::display('drop',50); ?>

                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">  <?php echo count(Task::tasks()); ?></span>
                </a>
                <?php echo Task::display('drop'); ?>

                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo user()->picture; ?>" class="user-image" alt="User Image"/>
                    <span class="hidden-xs"><?php echo user()->name; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo user()->picture; ?>" class="img-circle" alt="User Image" />
                            <p>
                            <?php echo user()->name; ?> - <?php echo user()->designation; ?>

                            <small>Member since <?php echo user()->joined; ?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e(guard_url('profile')); ?>" class="btn btn-theme">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(guard_url('logout')); ?>" class="btn btn-theme">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
            </ul>
        </div>
    </nav>
</header>