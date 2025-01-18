<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>

<?php if(Auth::check()): ?>
<div class="flex justify-center items-center m-40">
    <h2 class="text-4xl font-bold m-5"> Welcome, <?php echo e(Auth::user()->name); ?>!</h2>
    <a href="<?php echo e(route('modulles.index')); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Go to Dashboard</a>
</div>
<?php else: ?>
<div class="flex justify-center items-center m-40">
    <h2 class="text-4xl font-bold m-5"> Welcome to our website!</h2>
    <a href="<?php echo e(route('login')); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Login</a>
    <a href="<?php echo e(route('register')); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Register</a>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yassineamjad/ikramFromGit/resources/views/home/index.blade.php ENDPATH**/ ?>