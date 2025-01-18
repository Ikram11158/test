<?php $__env->startSection('title', 'User Details'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mx-auto">
    <!-- Affichage du message de succès -->
    <?php if(Session::has('success')): ?>
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        <?php echo e(Session::get('success')); ?>

    </div>
    <?php endif; ?>

    <div class="bg-white shadow-md rounded my-6 border border-gray-400">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            Gestion des Utilisateurs
            <a href="<?php echo e(route('users.create')); ?>" class="bg-green-500 text-white px-4 py-2 rounded">Ajouter un Nouvel Utilisateur</a>
        </div>

        <?php if(Session::has('success')): ?>
        <span class="bg-green-500 text-white p-2 rounded block mb-4"><?php echo e(Session::get('success')); ?></span>
        <?php endif; ?>
        <?php if(Session::has('fail')): ?>
        <span class="bg-red-500 text-white p-2 rounded block mb-4"><?php echo e(Session::get('fail')); ?></span>
        <?php endif; ?>

        <div class="p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nom</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Rôle</th>
                        <th class="py-2 px-4 border-b">Création</th>
                        <th class="py-2 px-4 border-b">Dernière Mise à Jour</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($users) > 0): ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="py-2 px-4 border-b"><?php echo e($loop->iteration); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($user->name); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($user->email); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($user->role); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($user->created_at); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($user->updated_at); ?></td>
                        <td class="py-2 px-4 border-b">
                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <!-- Formulaire pour supprimer un utilisateur -->
                            <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="8" class="py-2 px-4 border-b text-center">Aucun Utilisateur trouvé !</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white shadow-md rounded my-6 border border-gray-400">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            Gestion des Modules
            <a href="<?php echo e(route('modulles.create')); ?>" class="bg-green-500 text-white px-4 py-2 rounded">Ajouter un Nouveau Module</a>
        </div>

        <?php if(Session::has('success')): ?>
        <span class="bg-green-500 text-white p-2 rounded block mb-4"><?php echo e(Session::get('success')); ?></span>
        <?php endif; ?>
        <?php if(Session::has('fail')): ?>
        <span class="bg-red-500 text-white p-2 rounded block mb-4"><?php echo e(Session::get('fail')); ?></span>
        <?php endif; ?>

        <div class="p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nom du Module</th>
                        <th class="py-2 px-4 border-b">Création</th>
                        <th class="py-2 px-4 border-b">Dernière Mise à Jour</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($modulles) > 0): ?>
                    <?php $__currentLoopData = $modulles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="py-2 px-4 border-b"><?php echo e($loop->iteration); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($modulle->nom); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($modulle->created_at); ?></td>
                        <td class="py-2 px-4 border-b"><?php echo e($modulle->updated_at); ?></td>
                        <td class="py-2 px-4 border-b">
                            <a href="<?php echo e(route('modulles.edit', $modulle->id)); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <!-- Formulaire pour supprimer un module -->
                            <form action="<?php echo e(route('modulles.destroy', $modulle->id)); ?>" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce module ?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-2 px-4 border-b text-center">Aucun Module trouvé !</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yassineamjad/ikramFromGit/resources/views/users/index.blade.php ENDPATH**/ ?>