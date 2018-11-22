<ul class="dropdown-menu notification">
  <li class="header"> You have <?php echo count(Task::tasks()); ?> Tasks</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <div class="slimScrollDiv" >
    <ul class="menu"  >
      <div id="slim-scroll">
         <?php $__empty_1 = true; $__currentLoopData = Task::tasks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <li>
                      <a href="<?php echo trans_url('/admin/task/task'); ?>">
                          <div class="pull-left">
                              <img src="<?php echo @$value->user->picture; ?>" class="img-circle img-responsive" alt="User Image" />
                          </div>
                          <h4>
                              <?php echo @$value->task; ?>

                              <br>                         
                                <small>
                                  <i class="fa fa-clock-o">
                                  </i>
                                <time class="timeago" datetime="<?php echo @$value['created_at']; ?>"></time>
                                 <p><?php echo format_date($value->start); ?>-<?php echo format_date($value->end); ?> </p>
                              </small>

                            </h4>
                           
                          
                      </a>
                  </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <?php endif; ?>
      </div>
    </ul>
    </div>
  </li>
  <li class="footer"><a href="<?php echo e(trans_url('/admin/task/task')); ?>">View all</a></li>
</ul>
