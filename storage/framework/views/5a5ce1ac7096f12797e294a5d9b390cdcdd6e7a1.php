            <div class="tab-pane disabled active row" id="details">

                <div class="col-md-12 col-lg-12">
                <?php echo Form::text('name')
                -> label(trans(trans('page::page.label.name')))
                -> placeholder(trans(trans('page::page.placeholder.name'))); ?>


                <?php echo Form::textarea('content')
                -> label(trans('page::page.label.content'))
                -> value(e($page['content']))
                -> dataUpload(url($page->getUploadURL('content')))
                -> addClass('html-editor')
                -> placeholder(trans('page::page.placeholder.content')); ?>

                </div>
            </div>
            <div class="tab-pane disabled row" id="metatags">
                <div class="col-md-6 col-lg-6">
                    <?php echo Form::text('title')
                    -> label(trans('page::page.label.title'))
                    -> placeholder(trans('page::page.placeholder.title')); ?>

                    <?php echo Form::text('heading')
                    -> label(trans('page::page.label.heading'))
                    -> placeholder(trans('page::page.placeholder.heading')); ?>

                    <?php echo Form::text('sub_heading')
                    -> label(trans('page::page.label.sub_heading'))
                    -> placeholder(trans('page::page.placeholder.sub_heading')); ?>

                    <?php echo Form::text('meta_title')
                    -> label(trans('page::page.label.meta_title'))
                    -> placeholder(trans('page::page.placeholder.meta_title')); ?>

                </div>

                <div class="col-md-6 col-lg-6">
                    <?php echo Form::text('meta_keyword')
                    -> label(trans('page::page.label.meta_keyword'))
                    -> placeholder(trans('page::page.placeholder.meta_keyword')); ?>

                    <?php echo Form::textarea('meta_description')
                    -> label(trans('page::page.label.meta_description'))
                    -> rows(3)
                    -> placeholder(trans('page::page.placeholder.meta_description')); ?>

                    <?php echo Form::textarea('abstract')
                    -> label(trans('page::page.label.abstract'))
                    -> rows(3)
                    -> placeholder(trans('page::page.placeholder.abstract')); ?>

                </div>
            </div>
            <div class="tab-pane disabled row" id="settings">
                <div class="col-md-6 ">
                    <?php echo Form::range('order')
                    -> label(trans('page::page.label.order'))
                    -> placeholder(trans('page::page.placeholder.order')); ?>


                    <?php echo Form::text('slug')
                    -> label(trans('page::page.label.slug'))
                    -> append('.html')
                    -> placeholder(trans('page::page.placeholder.slug')); ?>


                    <?php echo Form::select('view')
                    -> options(trans('page::page.options.view'))
                    -> label(trans('page::page.label.view'))
                    -> placeholder(trans('page::page.placeholder.view')); ?>

                </div>
                <div class='col-md-6'>
                    <?php echo Form::hidden('compile')
                    -> forceValue('0'); ?>


                    <?php echo Form::select('compile')
                    -> options(trans('page::page.options.compile'))
                    -> label(trans('page::page.label.compile'))
                    -> placeholder(trans('page::page.placeholder.compile')); ?>


                    <?php echo Form::select('category_id')
                    -> options(trans('page::page.options.category'))
                    -> label(trans('page::page.label.category_id'))
                    -> placeholder(trans('page::page.placeholder.category_id')); ?>


                    <?php echo Form::select('status')
                    -> options(trans('page::page.options.status'))
                    -> label(trans('page::page.label.status'))
                    -> placeholder(trans('page::page.placeholder.status')); ?>

                </div>
            </div>
            <?php if($mode == 'create'): ?>
            <div class="tab-pane row" id="images">
                <div class="form-group">
                    <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                        <?php echo e(trans('page::page.label.images')); ?>

                    </label>
                    <div class='col-lg-6 col-sm-12'>
                        <?php echo $page->files('images')
                        ->url($page->getUploadUrl('images'))
                        ->uploader(); ?>

                    </div>                            
                </div>
            </div>
            <?php elseif($mode == 'edit'): ?>
            <div class="tab-pane row" id="images">
                <div class="form-group">
                    <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                        <?php echo e(trans('page::page.label.images')); ?>

                    </label>
                    <div class='col-lg-6 col-sm-12'>
                        <?php echo $page->files('images')
                        ->url($page->getUploadUrl('images'))
                        ->uploader(); ?>

                    </div>

                </div>
            </div>
            <?php elseif($mode == 'show'): ?>
            <div class="tab-pane disabled row" id="images">
                <div class='col-md-6'>
                    <?php echo $page->files('banner'); ?>

                </div>
                <div class='col-md-6'>
                    <?php echo $page->files('images'); ?>

                </div>
            </div>
            <?php endif; ?>
