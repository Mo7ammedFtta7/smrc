<ul class="sortable-list connectList agile-list ui-sortable" id="<?php echo $status; ?>">
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>       
        <li class="<?php echo @$value['priority']; ?>  <?php echo @$value['status']; ?>" id="<?php echo @$value->getRouteKey(); ?>">
            <?php echo @$value['task']; ?>

            <div class="task-link-btn">
                <button class="task-edit m-r-5 btn-xs btn-primary" data-toggle="modal" data-target="#modal-task">
                    <i class="fa fa-pencil"></i>
                </button>
                <button class="task-delete btn-xs btn-danger" data-action="DELETE" data-load-to='#<?php echo $value["status"]; ?>_list'  data-href='<?php echo e(trans_url('/admin/task/task')); ?>/<?php echo e($value->getRouteKey()); ?>' ><i class="fa fa-trash"></i></button>
            </div> 
            <div class="agile-detail">
                <i class="fa fa-clock-o"></i> <?php echo format_date(@$value['created_at']); ?>

                
            </div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>
</ul>

<script type="text/javascript">  
    $(".task-edit").click(function(){
        var id = $(this).parent().parent().attr('id');
        $('#modal-task .modal-content').load('<?php echo e(trans_url('admin/task/task')); ?>'+ '/' + id + '/' + 'edit');
        $('#modal-task').show();
    });  
    $(".task-trash").click(function(){
        location.reload();
    }); 
    $(".sortable-list").sortable({
        connectWith: ".connectList"
    }).disableSelection();

    $( ".sortable-list" ).on( "sortreceive", function( event, ui ) {
        var status = $(this).attr('id');
        var id     = ui.item.attr('id');

        var formURL  = "<?php echo e(guard_url('task/task')); ?>"+"/"+id;
        $.ajax( {
            url: formURL,
            type: 'PUT',
            data: {'status': status},
            success:function(data, textStatus, jqXHR)
            {
                console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
    }); 

</script>


<style>
.task-link-btn {
    position: absolute;
    right: -40px;
    top: 5px;
    z-index: 9;
    transition: 0.5s all ease;
}
.task-link-btn .btn-xs {
    display: block;
    margin-bottom: 5px;
}
.task-link-btn .btn-xs:last-child {
    margin-bottom: 0;
}
.sortable-list li {
    position: relative;
    overflow: hidden;
}
.sortable-list li:hover .task-link-btn {
    right: 0;
}
</style>