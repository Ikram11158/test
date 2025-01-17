<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Séances</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 1000px;
        margin-top: 50px;
    }

    h2 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 30px;
    }

    .table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        background-color: #007bff;
        color: white;
    }

    .table th, .table td {
        text-align: center;
        padding: 15px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2;
    }

    .alert {
        border-radius: 5px;
        margin-top: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 16px;
        font-weight: bold;
        padding: 10px 15px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>

</head>
<body>
    <div class="container mt-4">
        <h2>Liste des Séances</h2>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Séance</th>
                    <th>Chapitre</th>
                    <th>Contenu Réalisé</th>
                    <th>Pédagogie</th>
                    <th>Durée</th>
                    <th>Date Séance</th>
                    <th>Module</th>
                    <th>Matière</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $seances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($seance->seance); ?></td>
                        <td><?php echo e($seance->chapitre); ?></td>
                        <td><?php echo e($seance->contenu_realise); ?></td>
                        <td><?php echo e($seance->pedagogie); ?></td>
                        <td><?php echo e($seance->duree); ?> minutes</td>
                        <td><?php echo e($seance->date_seance); ?></td>
                        <td><?php echo e($seance->module); ?></td>
                        <td><?php echo e($seance->matiere); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\IKRAM\OneDrive\Bureau\projetphp3\cruud\cruud\resources\views/seanceShow.blade.php ENDPATH**/ ?>