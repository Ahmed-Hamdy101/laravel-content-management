

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 pt-5 ">

        <div class="row mt-5 pt-5">
            <div class="col-sm-4 mb-5 p-5 m-auto ">
                <a href="/posts/create/" class="btn btn-block btn-info"> <i class="bi bi-journal-plus"></i> Create Post</a>
            </div>
        </div>
        <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4 col-md-6  col-md-4 col-lg-3">

                <div class="card mb-1  text-dark  ">
                    <div class="card-body  ">
                        </i>
                        <h1 class="card-title text-center"> <?php echo e($post->title); ?> <i class="bi bi-journal-text text-info"></i>
                        </h1>
                        <p class="card-subtitle"><?php echo e($post->category->name); ?> </p>
                        <p class="card-text mt-1 p-1"> <?php echo e($post->content); ?> </p>
                        <a href="posts/<?php echo e($post->id); ?>"
                            class="card-link btn btn-sm btn-info mt-5 d-flex justify-content-center"
                            style="border-radius: 7px ;">View Post</a>

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
        <?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hacker/workspace/dynamic/framworks/laravel/apps/projects/laravel-content-management/resources/views/pages/posts/index.blade.php ENDPATH**/ ?>