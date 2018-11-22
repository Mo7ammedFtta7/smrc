 
                   <?php echo $__env->make('blog::blog.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            
              <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                
                                <div class="widget search">
                                    <form action="">
                                        <input type="text" class="form-control" placeholder="Keywords.." name="search[tags]" required="">
                                        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                                
                                <div class="widget category">
                                    
                                    <ul class="mt-20">
                                         <?php echo $__env->make('blog::blog.partial.aside', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="main-area parent-border">
                                
                                <div class="row mb30">
                                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="newest-item border">
                                            <div class="feature">
                                                
                                                <a href="<?php echo e(trans_url('blog')); ?>/<?php echo e(@$blog['slug']); ?>">
                                                    <img src="<?php echo e(url($blog->defaultImage('images','sm'))); ?>" class="img-responsive center-block" alt="" >
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="<?php echo e(trans_url('blog')); ?>/<?php echo e($blog['slug']); ?>"><?php echo e(@$blog->title); ?></a></h4>
                                                <div class="metas mt20">
 
                                                    <div class="tag pull-left">
                                                        <a href="<?php echo e(trans_url('blogs/category')); ?>/<?php echo e(@$blog->category->slug); ?>" class=""><?php echo e(@$blog->category->name); ?></a>
                                                    </div>

                                                    <div class="date-time pull-right">
                                                        <span><i class="fa fa-comments"></i><?php echo e($blog->comments->count()); ?></span>
                                                        <span><i class="fa fa-calendar"></i><?php echo e(format_date($blog['created_at'])); ?></span>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="author">
                                                    <div class="avatar pull-left">
                                                        <img class="img-circle" src="img/blogs/author-04.jpg" alt="">
                                                    </div>
                                                    <p>by <span class="text-primary">
                                                        <a href="" class="">
                                                            <?php echo e((@$blog->user->name)); ?></a></span></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                             <div class="pagination text-center">
                            <?php echo e($blogs->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>