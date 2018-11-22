<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Theme::getMetaTitle(); ?> :: <?php echo e(__('app.name')); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300'" rel='stylesheet' type='text/css'>
        <?php echo Theme::asset()->styles(); ?>

        <?php echo Theme::asset()->scripts(); ?>

    </head>

    <body class="sidebar-mini  skin-<?php echo e(setting('admin.color', 'red')); ?>" >
        <div class="wrapper">
            <?php echo Theme::partial('header'); ?>

            <?php echo Theme::partial('aside'); ?>

            <?php echo Theme::content(); ?>

            <?php echo Theme::partial('right'); ?>

            <?php echo Theme::partial('footer'); ?>

        </div>
    </body>
    <?php echo Theme::asset()->container('footer')->scripts(); ?>

</html>




