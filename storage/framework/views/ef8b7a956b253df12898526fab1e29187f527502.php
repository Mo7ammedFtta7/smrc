<?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="media discussion-widget-block">
      <div class="media-left media-middle">
            <a href="#">
                <img class="media-object img-circle" src="<?php echo url($value->user->picture); ?>" style="width:60px;height:60px;">
            </a>
      </div>
      <div class="media-body">
            <p><?php echo @$value->task; ?></p>
            <p class="text-muted"><small><i class="ion ion-android-person"></i> <?php echo @$value->user->name; ?> at <?php echo format_date($value->created_at); ?></small></p>
      </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="discussion-widget-block">
    <p>No Discussions</p>
</div>
<?php endif; ?>
