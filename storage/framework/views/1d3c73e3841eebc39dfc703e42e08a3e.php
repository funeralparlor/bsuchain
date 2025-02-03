

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Welcome, <?php echo e(Auth::user()->name); ?>!</h1>
    <p>Bulacan State University Student Profiling.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pcuser\Documents\laravel\anathema\resources\views/dashboard.blade.php ENDPATH**/ ?>