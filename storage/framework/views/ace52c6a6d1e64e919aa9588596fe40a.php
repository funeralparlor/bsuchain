<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">BulSU Scholarship Office</a>
            <div class="navbar-nav ms-auto">
                <?php if(auth()->guard()->check()): ?>

                    <form action=" <?php echo e(route('logout')); ?>" method="POST">

                                    <?php echo csrf_field(); ?>
                                        <button type="submit" class="nav-link btn btn-link">Log out</button>"

                    </form>
                <?php else: ?>
                    <!---Log in--->
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Log in</a>
                    <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Landing Page Content -->
    <div class="landing-page">
        <!-- Title -->
        <h1 class="main-title">Bulacan State University</h1>
        
        <!-- Subtitle/Text -->
        <p class="subtitle">Bulacan State University Student Profiling System</p>

        <!-- Options in a long circle 
        <div class="oval-container">
            <a href="<?php echo e(route('list')); ?>">List</a>
            <a href="<?php echo e(route('search')); ?>">Search</a>
            <a href="<?php echo e(route('reports')); ?>">Settings</a>
        </div>
        -->
    </div>

    <?php if(Auth::check()): ?>
    <div class="alert alert-info">
        Logged in as <?php echo e(Auth::user()->name); ?> but still seeing this page!
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pcuser\Documents\laravel\anathema\resources\views/landing.blade.php ENDPATH**/ ?>