 

<?php $__env->startSection('content'); ?>

<div class="container">

    <h1>Mes Modules</h1>

    <a href="<?php echo e(route('modules.create')); ?>" class="btn btn-primary">Ajouter un Module</a>

    <ul>
        <?php if($modules && $modules->count() > 0): ?>
            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($module->nom); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <li>Aucun module trouvé.</li>
        <?php endif; ?>
    </ul>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cruud\cruud\resources\views/modules/index.blade.php ENDPATH**/ ?>