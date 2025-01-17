<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 CRUD - Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Arial', sans-serif;
            
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
        }

        .card-body {
            padding: 30px;
        }

        .alert {
            border-radius: 5px;
            margin-top: 20px;
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table th, .table td {
            text-align: center;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-sm {
            padding: 5px 10px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Affichage du message de succès -->
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                Gestion des Utilisateurs
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success btn-sm float-end">Ajouter un Nouvel Utilisateur</a>
            </div>

            <?php if(Session::has('success')): ?>
                <span class="alert alert-success p-2"><?php echo e(Session::get('success')); ?></span>
            <?php endif; ?>
            <?php if(Session::has('fail')): ?>
                <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
            <?php endif; ?>

            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Création</th>
                            <th>Dernière Mise à Jour</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($users) > 0): ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->role); ?></td>
                                    <td><?php echo e($user->created_at); ?></td>
                                    <td><?php echo e($user->updated_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-primary btn-sm">Modifier</a>
                                    </td>
                                    <td>
                                        <!-- Formulaire pour supprimer un utilisateur -->
                                        <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">Aucun Utilisateur trouvé !</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\Users\IKRAM\OneDrive\Bureau\projetphp3\cruud\cruud\resources\views/users/index.blade.php ENDPATH**/ ?>