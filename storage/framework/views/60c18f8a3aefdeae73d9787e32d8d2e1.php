<nav class="border-b border-gray-800 py-3">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-green text-lg font-bold">
            <a href="/">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" >
            </a>
        </div>
        <div class="hidden md:flex space-x-4">
            <?php if(Auth::check()): ?>
                <a href="<?php echo e(route('modulles.index')); ?>" class="text-green-800 hover:text-green border-b-2 border-green">Dashboard</a>
                <a href="<?php echo e(route('logout')); ?>" class="text-green hover:text-green border-b-2 border-green"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                    <?php echo csrf_field(); ?>
                </form>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-green-800 hover:text-green border-b-2 border-green">Login</a>
                <a href="<?php echo e(route('register')); ?>" class="text-green hover:text-green border-b-2 border-green">Register</a>
            <?php endif; ?>
        </div>
        <div class="md:hidden">
            <button id="navbar-toggle" class="text-green-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <div id="navbar-menu" class="md:hidden hidden">
        <?php if(Auth::check()): ?>
            <a href="<?php echo e(route('modulles.index')); ?>" class="block text-green-800 hover:text-green border-t border-gray-800 px-2 py-1">Dashboard</a>
            <a href="<?php echo e(route('logout')); ?>" class="block text-green-800 hover:text-green border-t border-gray-800 px-2 py-1"
               onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">Logout</a>
            <form id="logout-form-mobile" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                <?php echo csrf_field(); ?>
            </form>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="block text-green-800 hover:text-green border-t border-gray-800 px-2 py-1">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="block text-green-800 hover:text-green border-t border-gray-800 px-2 py-1">Register</a>
        <?php endif; ?>
    </div>
</nav>

<script>
    document.getElementById('navbar-toggle').addEventListener('click', function() {
        var menu = document.getElementById('navbar-menu');
        menu.classList.toggle('hidden');
    });
</script><?php /**PATH /home/yassineamjad/ikramFromGit/resources/views/layout/navbar.blade.php ENDPATH**/ ?>