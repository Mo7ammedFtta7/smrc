<?php if($message = Session::get('success')): ?>
        <div class="alert alert-success" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong><?php echo e(trans('app.flash.success')); ?></strong> <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
<?php echo e(Session::forget('success')); ?>

<?php endif; ?>

<?php if($message = Session::get('error')): ?>
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong><?php echo e(trans('app.flash.error')); ?></strong> <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
<?php echo e(Session::forget('error')); ?>

<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
        <div class="alert alert-warning" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong><?php echo e(trans('app.flash.warning')); ?></strong> <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>

<?php echo e(Session::forget('warning')); ?>

<?php endif; ?>

<?php if($message = Session::get('info')): ?>
        <div class="alert alert-info" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong><?php echo e(trans('app.flash.info')); ?></strong> <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
<?php echo e(Session::forget('info')); ?>

<?php endif; ?>

<?php if($message = Session::get('status')): ?>
        <div class="alert alert-info" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong><?php echo e(trans('app.flash.info')); ?></strong> <?php echo e($message); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
<?php echo e(Session::forget('status')); ?>

<?php endif; ?>

<?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>Oops!</strong> <?php echo e($errors->first('email')); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
<?php endif; ?>
