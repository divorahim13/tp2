<?php $__env->startSection('content'); ?>
<h1>Daftar Proyek</h1>
<a href="<?php echo e(route('projects.create')); ?>">Tambah Proyek Baru</a>
<form method="GET" action="<?php echo e(route('projects.index')); ?>">
    <input type="text" name="search" placeholder="Cari proyek...">
    <button type="submit">Cari</button>
</form>
<ul>
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($project->name); ?> - <?php echo e($project->tasks->count()); ?> Tugas</li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DIVO\Documents\Divo\binus\WEB PROGRAMMING\tp2\project-management\resources\views/welcome.blade.php ENDPATH**/ ?>