

<?php $__env->startSection('content'); ?>
    <div class="container pb-5 mb-5 ">

        <form action="/catagory/store" class="form pt-5 mt-5 " method="POST">
            <?php echo csrf_field(); ?>
            <fieldset class="fieldset">

                <legend class="text-primary">
                    <h1> Create Post </h1>
                </legend>
                <div class="form-group">
                    <Label class="form-label text-primary" for="title">name </Label>
                    <input type="text" name="catagory" class="form-control" id="title">
                </div>


                <br>
                <button class="btn btn-sm btn-primary" type="submit"> create catagory <i style="font-size:16px;"
                        class='bi bi-journal-text'> </i> </button>
            </fieldset>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hacker/workspace/dynamic/framworks/laravel/apps/projects/laravel-content-management/resources/views/pages/catagory/create.blade.php ENDPATH**/ ?>