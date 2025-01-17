<!-- resources/views/groupess/select_group.blade.php -->

<div class="container">
    <h1>Choisir un groupe pour le module <?php echo e($modulle->nom); ?></h1>
    <div class="list-group">
        <?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('seances.showForm',['id' =>$group->id])); ?>" class="list-group-item list-group-item-action">
                <?php echo e($group->nom); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\fatimaezzahra\Desktop\crud\cruud\cruud\resources\views/groupes/group.blade.php ENDPATH**/ ?>