<div class="sidebar">
    <div class="widget">
     <!--    <a href="<?php echo e(trans_url('blog/create')); ?>" class="btn btn-primary"><?php echo e(trans('app.create')); ?> Blog</a> -->
    </div>

    <div class="widget category">
        <h3 class="border-bottom">Category</h3>
        <ul class="mt-20">
            <li class="menu-title uppercase"><a href="<?php echo e(trans_url('blogs')); ?>"><i style="color: #4BCC88;" class="fa fa-circle-o"></i> All</a></li>
            <?php $__empty_1 = true; $__currentLoopData = Blog::selectCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>             
                <li class="menu-title uppercase"><a href="<?php echo e(trans_url('blogs/category')); ?>/<?php echo e(@$key); ?>"><i style="color: #4BCC88;" class="fa fa-circle-o"></i> <?php echo @$category; ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>   
        </ul>
        
    </div>
    <div class="widget tags">
    <h3>Tag</h3>
    <ul class="mt-20">
        <?php $__empty_1 = true; $__currentLoopData = Blog::selectTags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            
               
                <li><a href="<?php echo e(trans_url('blogs/tag')); ?>/<?php echo e(@$tag); ?>"><?php echo @$tag; ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?> 
    </ul>
    </div>
</div>
