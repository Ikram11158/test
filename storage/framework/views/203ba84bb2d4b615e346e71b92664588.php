<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <title><?php echo $__env->yieldContent('title', 'Cahier de Charges'); ?></title>
    <title>Document</title>
</head>

<body>
    <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="absolute bottom-0 w-full bg-green-800 text-white text-center py-3">
        <p>&copy; <?php echo e(date('Y')); ?> - Cahier de Charges</p>
    </footer>

</body>

</html><?php /**PATH /home/yassineamjad/ikramFromGit/resources/views/base.blade.php ENDPATH**/ ?>