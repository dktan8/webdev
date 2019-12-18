<?php $__env->startSection('title', 'Home Page'); ?>
	  <div class="container">
	  <div class="card-header">Welcome to your homepage></div>
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                    			<div class="col-md-12 col-md-offset-2">
                                    <?php if(session('message')): ?>
                                        <p class="text-success"><b><?php echo e(session('message')); ?></b></p>
                                    <?php endif; ?>
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
                    					</div>

                    					<div class="card-header">
                    						<i><?php echo e(date('M j, Y h:ia', strtotime($post->created_at))); ?></i>
                    					</div>
                    				</div>
                    				<hr>
                    			</div>
                    		</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/webapps/resources/views/home.blade.php ENDPATH**/ ?>