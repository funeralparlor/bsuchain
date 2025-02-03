<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - BulSU Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
        }
        .main-content {
            margin-left: 250px;
            flex: 1;
            padding: 20px;
        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
        }
        .sidebar-menu li {
            margin: 10px 0;
        }
        .sidebar-menu a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar-menu a:hover {
            background: #34495e;
        }
        .sidebar-menu .active {
            background: #3498db;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3 class="mb-4">BulSU Dashboard</h3>
            <ul class="sidebar-menu">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                        <i class="fas fa-home me-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('profile')); ?>" class="<?php echo e(request()->routeIs('profile') ? 'active' : ''); ?>">
                        <i class="fas fa-user me-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('settings')); ?>" class="<?php echo e(request()->routeIs('settings') ? 'active' : ''); ?>">
                        <i class="fas fa-cog me-2"></i> Settings
                    </a>
                </li>
                
                <li>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
  <?php echo csrf_field(); ?>
  <button type="submit">Logout</button>
</form>
    
                </li>
    
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\pcuser\Documents\laravel\anathema\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>