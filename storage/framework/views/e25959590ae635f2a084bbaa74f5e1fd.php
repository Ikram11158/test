<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
<div class="container">
    <h1>Choisir un module</h1>
    <div class="list-group">
        <?php $__currentLoopData = $modulles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('Groupe1', ['id' => $modulle->id])); ?>" class="list-group-item list-group-item-action">
            <?php echo e($modulle->nom); ?>

        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


</body>
</html>

<?php /**PATH C:\Users\fatimaezzahra\Desktop\crud\cruud\cruud\resources\views/modulles/modulle.blade.php ENDPATH**/ ?>