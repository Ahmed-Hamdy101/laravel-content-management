
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body style="background: #f8f8f8" >
    
    <header>

        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('nav'); ?>

    </header>

    <section  id="main" class="mb-5 pb-5">

        <?php echo $__env->yieldContent('content'); ?>

    </section>


    <footer>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>

    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/lottie.min.js')); ?>"></script>
    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/mdb.js')); ?>"></script>

</body>

</html><!-- JQuery --><?php /**PATH /home/hacker/workspace/dynamic/framworks/laravel/apps/projects/laravel-content-management/resources/views/layouts/default.blade.php ENDPATH**/ ?>