

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>User Profile</h1>
        <p>Name: <?php echo e(Auth::user()->name); ?></p>
        <p>Email: <?php echo e(Auth::user()->email); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pcuser\Documents\laravel\anathema\resources\views/profile.blade.php ENDPATH**/ ?>