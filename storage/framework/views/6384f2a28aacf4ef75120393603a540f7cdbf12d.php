

<?php $__env->startSection('content'); ?>
<div class="container py-5">

  <form action="/posts/<?php echo e($post->id); ?>" class="form" method="POST">
    <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <fieldset class="fieldset">
          
          <legend class="text-primary">
                <h1> Update Post </h1>
              </legend>
              <hr>
              <div class="form-group">
                <Label class="form-label text-primary" for="title">Title </Label>
                <input type="text" name="title" class="form-control" id="title" value=" <?php echo e($post->title); ?>">
            </div>
            
            <div class="form-group">
              <Label class="form-label text-primary" for="texthere">Content </Label>
                <textarea name="content" class="form-control" placeholder="hold on type it ...." style="resize: none" cols="10"
                    rows="5" id="texthere"> <?php echo e($post->content); ?> </textarea>
            </div>

            <div class="form-group">
              <label class="form-label text-primary" for="content">content</label>
                <select name="category_id" id="content" class="form-control">
                    <?php $__currentLoopData = $catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($c->id == $post->category_id): ?>
                            <option value="<?php echo e($c->id); ?>" selected> <?php echo e($c->name); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($c->id); ?>"> <?php echo e($c->name); ?></option>                    
                      </select>
                    </div>
                    <br>
            <button class="btn btn-sm btn-primary" type="submit"> Edit <i style="font-size:16px;"
                    class='bi bi-journal-text'> </i> </button>
        </fieldset>
        
    </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hacker/workspace/dynamic/framworks/laravel/apps/projects/laravel-content-management/resources/views/pages/posts/edit.blade.php ENDPATH**/ ?>