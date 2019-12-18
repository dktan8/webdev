<?php $__env->startSection('content'); ?>
	  <div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<?php if($errors->any()): ?>
				<div>
					Errors:
				<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="text-danger"><li><?php echo e($error); ?></li></div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
				</div>
				<?php endif; ?>
                <hr>
				<div class="card">
					<div class="card-header">
						Post By: <?php echo e($post->user->name); ?>

					</div>
					<div class="card-body">
						<h2 class="card-title"><?php echo e($post->title); ?></h2>
						<p class="card-text"><?php echo e($post->content); ?></p>
						<?php if(auth()->id() == $post->user->id): ?>
                            <a href="<?php echo e(route('edit.post', ['id' => $post->id])); ?>" class="card-link">Edit</a>
                        <?php endif; ?>
					</div>
					<div class="card-header">
                    	<i><?php echo e(date('M j, Y h:ia', strtotime($post->created_at))); ?></i>
                    	<div class="form-group row">
                     <form method="POST" action="<?php echo e(route('add.comment',['post_id' => $post->id])); ?>">
                          <?php echo csrf_field(); ?>

	                         <div class="form-group">
                                <textarea class="form-control" placeholder="Enter Comment"
                                    name="content"rows="3"></textarea>
                              </div>
                            <input type="submit" value="Post" class="btn btn-primary mb-2">
                            </form>
                        </div>
					</div>
				</div>
				<hr>
			</div>
		</div>



        <h2 class="header">
           Comments
        </h2>

		<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card-body">
          <h5 class="card-title"><?php echo e($comment->user->name); ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"> <?php echo e($comment->created_at); ?> </h6>
          <p class="card-text"> <?php echo e($comment->content); ?> </p>
          <a href="<?php echo e(route('posts.show', ['id' => $post->id])); ?>" class="card-link">View Profile</a>
          <?php if(auth()->id() == $comment->user->id): ?>
          <a href="<?php echo e(route('edit.comment', ['id' => $comment->id])); ?>" class="card-link">Edit</a>
          <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	  <div class="text-center" style="margin-left: 500px;margin-top: 20px;">
      	    <?php echo $comments->links();; ?>

          </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/webapps/resources/views/posts/show.blade.php ENDPATH**/ ?>