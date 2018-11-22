<ul class="dropdown-menu  notification">
  <li class="header">  You have <?php echo Message::count('Inbox', null, 1); ?> messages</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <div class="slimScrollDiv" >
      <ul class="menu" >
      <div class="slim-scroll">
      <?php $__empty_1 = true; $__currentLoopData = Message::list('Inbox', null, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
       <li>
           <a href="<?php echo guard_url('message/message'); ?>">
               <div class="pull-left">
                    <img src="<?php echo @$value['user']->picture; ?>"  class="img-circle img-responsive" alt="User Image" />
               </div>
               <h4>
                   <?php echo @$value->user->name; ?>

                   <br>
                  <small class="">
                       <i class="fa fa-clock-o">
                       </i>
                       <time class="timeago" datetime="<?php echo @$value['created_at']; ?>"></time>
                        <p class=""><?php echo @$value['subject']; ?></p>
                   </small>
               </h4>
              
               
           </a>
       </li>
       <!-- end message -->
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
       <?php endif; ?>
      </div>
    </ul>
  </div>
  </li>
  <li class="footer"><a href="<?php echo e(guard_url('message/message')); ?>">See All Messages</a></li>
</ul>
