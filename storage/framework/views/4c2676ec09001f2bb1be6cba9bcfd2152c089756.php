            <div class="tab-pane active disabled" id="details">
            <div class="tab-pan-title"> <?php echo e(trans('app.view')); ?> menu [<?php echo e($menu->name ?? 'New menu'); ?>]</div>
               <div class="row">
                    <div class="col-md-6 ">
                        <?php echo Form::text('name')
                        -> label(trans('menu::menu.label.name'))
                        -> required()
                        -> placeholder(trans('menu::menu.placeholder.name')); ?>

                    </div>
                    <div class="col-md-6 ">
                        <?php echo Form::text('key')
                        -> label(trans('menu::menu.label.key'))
                        -> required()
                        -> placeholder(trans('menu::menu.placeholder.key')); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <?php echo Form::text('order')
                        -> label(trans('menu::menu.label.order'))
                        -> placeholder(trans('menu::menu.placeholder.order')); ?>

                    </div>
                    <div class="col-md-6">
                        <?php echo Form::select('status')
                        -> options(trans('menu::menu.options.status'))
                        -> label(trans('menu::menu.label.status'))
                        -> placeholder(trans('menu::menu.placeholder.status')); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <?php echo Form::textarea('description')
                        -> label(trans('menu::menu.label.description'))
                        -> placeholder(trans('menu::menu.placeholder.description')); ?>

                    </div>
                </div>
            </div>
