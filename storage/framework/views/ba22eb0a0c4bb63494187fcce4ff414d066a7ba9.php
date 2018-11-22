<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo e(Theme::getMetaTitle()); ?> - <?php echo e(__('app.name')); ?></title>
        <meta name="keyword" content="<?php echo e(Theme::getMetaKeyword()); ?>">
        <meta name="description" content="<?php echo e(Theme::getMetaDescription()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo e(asset('apple-touch-icon.png')); ?>">

        <?php echo Theme::asset()->styles(); ?>

        <?php echo Theme::asset()->scripts(); ?>

    </head>
    <body>
        <div class="page">
        <?php echo Theme::partial('login'); ?>

        <?php echo Theme::partial('header'); ?>

        <?php echo Theme::content(); ?>

        <?php echo Theme::partial('footer'); ?>

        </div>
        <?php echo Theme::asset()->container('footer')->scripts(); ?>

        <?php echo Theme::asset()->container('extra')->scripts(); ?>

    </body>
</html>
