

<?php $__env->startSection('content'); ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-6 m-auto">

                <h1 class="text-center"> <a class="text-decoration-none " href=""> <?php echo e($post->title); ?> <i class="bi bi-journal"></i> </a>
                </h1>

                <textarea class="content" cols="60" rows="6" disabled class="form-control" style="resize:none">
                        <?php echo e($post->content); ?>

                  </textarea>

                <div class="col-sm-4 mb-5 p-3 m-auto">

                    <a href="<?php echo e($post->id); ?>/edit" class="btn btn-block btn-danger "> update </a>

                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\micro-hack\Documents\workspace\dynamic\framworks\laravel\apps\laravel-content-management\resources\views/pages/posts/show.blade.php ENDPATH**/ ?>