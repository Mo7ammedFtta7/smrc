<div class="section-header">
    <h2><?php echo $category->title; ?></h2>
    <p> <?php echo $category->details; ?> </p>
</div>
<?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-4 content-center text-center">
    <div class="list-view-item">
        <i class="<?php echo $block->icon; ?>"></i>
        <h5><?php echo $block->name; ?></h5>
        <p><?php echo $block->description; ?> ​ </p>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>