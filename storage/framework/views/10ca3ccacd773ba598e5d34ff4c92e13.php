<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cahier de Charges - Professeurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #eef2f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header {
            background-color: #004080;
            color: white0;
            padding: 2rem 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        .card-header {
            background-color: #0056b3;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: #ffffff;
            color: #333;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #004080;
            color: white;
            padding: 1rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
<div class="header text-center">
        <h1>Cahier de Charges</h1>
        <p>Plateforme de gestion des tâches et responsabilités des les professeurs</p>
    </div>

    <!-- Container Section -->
    <div class="container">
        <!-- Gestion des Tâches Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">connexion</div>
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(url('/login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de Passe</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\fatimaezzahra\Desktop\crud\cruud\cruud\resources\views/auth/login.blade.php ENDPATH**/ ?>