<?php $__env->startSection('title', 'Create Post'); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<h1>Create a new post</h1>
				<hr>
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

				<form method="POST" action="<?php echo e(route('add.post')); ?>">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label for="title">Post Title:</label>
						<input type="input" type="text" class="form-control" name="title"
                            value="<?php echo e(old('title')); ?>">
					</div>

					<div class="form-group">
						<label for="content">Post Content:</label>
						<textarea class="form-control" name="content" rows="5"
                            value="<?php echo e(old('content')); ?>"></textarea>
					</div>
					<input type="submit" value="Create!" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
	  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/webapps/resources/views/posts/create.blade.php ENDPATH**/ ?>