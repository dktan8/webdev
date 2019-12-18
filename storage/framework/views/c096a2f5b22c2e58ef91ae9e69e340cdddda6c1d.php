

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sport Category Search</div>

                <div class="card-body">
                     <form method="POST" action="<?php echo e(route('addCat')); ?>">
                                             <?php echo csrf_field(); ?>

                                             <div class="form-group row">
                                                 <label for="category" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Category')); ?></label>

                                                 <div class="col-md-6">
                                                     <input id="category" type="category" class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="category" value="<?php echo e(old('category')); ?>" required autocomplete="email" autofocus>

                                                     <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                         <span class="invalid-feedback" role="alert">
                                                             <strong><?php echo e($message); ?></strong>
                                                         </span>
                                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                 </div>
                                             </div>


                                             <div class="form-group row mb-0">
                                                 <div class="col-md-8 offset-md-4">
                                                     <button type="submit" class="btn btn-primary">
                                                         <?php echo e(__('Search')); ?>

                                                     </button>


                                                 </div>
                                             </div>
                                         </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Laravel/webapps/resources/views/categories/category.blade.php ENDPATH**/ ?>