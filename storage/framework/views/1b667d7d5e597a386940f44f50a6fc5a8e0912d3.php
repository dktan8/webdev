<?php $__env->startSection('content'); ?>
    <h1>Home Page <span class="badge badge-secondary">Welcome!</span></h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="card text-center">
      <div class="card-header">
        Posted by: <?php echo e($post->user->name); ?>

      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo e($post->title); ?></h5>
        <p class="card-text"><?php echo e($post->content); ?></p>
        <a href="<?php echo e(route('posts.show', ['id' => $post->id])); ?>" class="btn btn-secondary" role="button">View Post</a>
        <?php if(auth()->id() == $post->user->id): ?>
                  <a href="<?php echo e(route('edit.post', ['id' => $post->id])); ?>" class="card-link">Edit</a>
        <?php endif; ?>
      </div>
      <div class="card-footer text-muted">
        <?php echo e(date('M j, Y h:ia', strtotime($post->created_at))); ?>

      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="text-center" style="margin-left: 500px;margin-top: 20px;">
        <?php echo $posts->links();; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/webapps/resources/views/posts/index.blade.php ENDPATH**/ ?>