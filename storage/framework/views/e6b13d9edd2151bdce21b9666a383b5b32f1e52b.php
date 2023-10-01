

<?php $__env->startSection('content'); ?>
    <div class="container m-auto">
        <div class="row ">
            <div class="col-8 m-auto">

                <form class="form">
                    <!-- Name input -->
                    <div class="form-outline mb-4 mt-5">
                        <input type="text" id="form4Example1" class="form-control border bg-light" />
                        <label class="form-label" for="form4Example1">Name</label>
                    </div>


                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control border" id="form4Example3" rows="4"></textarea>
                        <label class="form-label" for="form4Example3">Message</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                        <label class="form-check-label" for="form4Example4">
                            Send me a copy of this message
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\micro-hack\Documents\workspace\dynamic\framworks\laravel\apps\laravel-content-management\resources\views/pages/contact/contact.blade.php ENDPATH**/ ?>