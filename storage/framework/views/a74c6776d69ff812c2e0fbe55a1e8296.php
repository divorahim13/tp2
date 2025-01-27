<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Manajemen Proyek'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"> <!-- Sesuaikan jika ada CSS -->
</head>
<body>
    <header>
        <h1>Manajemen Proyek</h1>
        <nav>
            <a href="<?php echo e(route('projects.index')); ?>">Home</a>
            <a href="<?php echo e(route('projects.create')); ?>">Tambah Proyek</a>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Manajemen Proyek</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\DIVO\Documents\Divo\binus\WEB PROGRAMMING\tp2\project-management\resources\views/layouts/app.blade.php ENDPATH**/ ?>