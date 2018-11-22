<!-- Start image display for <?php echo $field; ?> -->
<div  class="image-display">
<?php $__empty_1 = true; $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php
        $info = pathinfo($file['file']);
        $ext  = strtolower($info['extension']);
    ?>
    <?php if(in_array($ext, ['jpg','jpeg', 'png', 'gif']) ): ?>
        <a href='<?php echo url("/image/original/".$file["path"]); ?>' target="_blank">
            <img src='<?php echo url("/image/{$size}/".$file["path"]); ?>' class="img-thumbnail image-responsive">
        </a>
    <?php else: ?>
        <a href='<?php echo e(url('/file/download')); ?>/<?php echo $file["path"]; ?>' target="_blank" class="show-file"><?php echo $file["file"]; ?></a><br/>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
Files not uploaded.
<?php endif; ?>
</div>
<!-- End image display. -->
