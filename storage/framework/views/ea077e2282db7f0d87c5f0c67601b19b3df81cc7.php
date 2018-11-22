            <?php echo $__env->make('slider::public.slider.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <section class="grid">
                <div class="container">
                    <div class="row">
                         <div class="col-md-9">
                            <div class="main-area parent-border list-item">
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <?php echo Slider::getSlider($slider->slug); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="pagination text-center">
                            <?php echo e($sliders->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section> 