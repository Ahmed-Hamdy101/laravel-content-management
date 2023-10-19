
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

    <section  id="main">

        <?php echo $__env->yieldContent('content'); ?>

    </section>


    <footer class="row m-0 p-0">
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>

    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/lottie.min.js')); ?>"></script>
    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script type="text/javascript" rel="javascript" src="<?php echo e(asset('js/mdb.js')); ?>"></script>

</body>

</html><!-- JQuery --><?php /**PATH C:\Users\micro-hack\Documents\workspace\dynamic\framworks\laravel\apps\laravel-content-management\resources\views/layouts/default.blade.php ENDPATH**/ ?>