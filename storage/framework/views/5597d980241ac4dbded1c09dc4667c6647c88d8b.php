<div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="details">
        <div class='row'>

           <div class='col-md-12 col-sm-6'>
                   <?php echo Form::text('title')
                   -> label(trans('blog::blog.label.title'))
                   -> placeholder(trans('blog::blog.placeholder.title')); ?>

            </div>

            <div class='col-md-4 col-sm-6'>
                   <?php echo Form::select('category_id')
                    ->options(Blog::selectadminCategories())
                   -> label(trans('blog::blog.label.category_id'))
                   -> placeholder(trans('blog::blog.placeholder.category_id')); ?>

            </div>

            <div class='col-md-8 col-sm-6'>
                   <?php echo Form::text('tags')
                   -> label(trans('blog::blog.label.tags'))
                   -> placeholder(trans('blog::blog.placeholder.tags')); ?>

            </div>                
          
            <div class='col-md-12'>
                <?php echo Form::textarea('description')
                -> label(trans('blog::blog.label.description'))
                -> dataUpload(trans_url($blog->getUploadURL('description')))
                -> addClass('html-editor')
                -> placeholder(trans('blog::blog.placeholder.description')); ?>

            </div>

            <?php if(@$blog['published'] == 'yes'): ?>
              <div class='col-md-4 col-sm-6'>
                       <?php echo Form::numeric('viewcount')
                       -> label(trans('blog::blog.label.viewcount'))
                       -> placeholder(trans('blog::blog.placeholder.viewcount')); ?>

                </div>
               
            <?php endif; ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="image">
        <div class='row'>
          <div class="col-md-6">
            <div class='col-md-12 col-sm-6'>
                     <?php echo Form::text('meta_title')
                     -> label(trans('blog::blog.label.meta_title'))
                     -> placeholder(trans('blog::blog.placeholder.meta_title')); ?>

              </div>
              <div class='col-md-12 col-sm-6'>
                     <?php echo Form::textarea('meta_description')
                     -> label(trans('blog::blog.label.meta_description'))
                     -> placeholder(trans('blog::blog.placeholder.meta_description')); ?>

              </div>
              <div class='col-md-12 col-sm-6'>
                     <?php echo Form::text('meta_keyword')
                     -> label(trans('blog::blog.label.meta_keyword'))
                     -> placeholder(trans('blog::blog.placeholder.meta_keyword')); ?>

              </div>
            </div>
            <div class="col-md-6">
                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         <?php echo e(trans('blog::blog.label.images')); ?>

                         </label>
                        <div class='col-lg-12 col-sm-12'>
                            <?php echo $blog->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($blog->getUploadUrl('images'))
                            ->dropzone(); ?>

                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            <?php echo $blog->files('images')
                             ->editor(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
            
            <script>
$( document ).ready(function() {
    $('#tags').selectize({
        delimiter: ',',
        persist: false,
        valueField: 'tag',
        labelField: 'tag',
        searchField: 'tag',
        options: tags,
        create: function(input) {
            return {
                tag: input
            }
        }
    });
});
</script>
<script>
var tags = [
<?php $__empty_1 = true; $__currentLoopData = Blog::selectTags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    {tag: "<?php echo e($tag); ?>" },
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?> 
];
</script>