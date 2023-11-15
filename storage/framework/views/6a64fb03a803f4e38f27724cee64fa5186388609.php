

<?php $__env->startSection('content'); ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-6 m-auto p-5 rounded border shadow">

                <h1 class="text-center"> <a class="text-decoration-none " href=""> <?php echo e($post->title); ?> <i class="bi bi-journal"></i> </a>
                </h1>

                <p > <p class=" p-3 rounded text-success bg-dark"> <?php echo e($post->content); ?></p></p>

                <div class="col-sm-4 mb-5 p-3 m-auto">

                    <a href="<?php echo e($post->id); ?>/edit" class="btn btn-block btn-danger "> update </a>

                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hacker/workspace/dynamic/framworks/laravel/apps/projects/laravel-content-management/resources/views/pages/posts/show.blade.php ENDPATH**/ ?>