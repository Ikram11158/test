<!-- resources/views/groupess/select_group.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir un Groupe</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }

        /* En-tête */
        .title-container {
            border: 2px solid #007bff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            text-align: center;
        }

        .main-title {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: underline;
            margin: 0;
        }

        .subtitle-container {
            border: 2px solid #6c757d;
            padding: 15px;
            margin-bottom: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(90deg, #e9ecef, #d6d8db);
            color: #343a40;
            text-align: center;
        }

        .subtitle {
            font-size: 24px;
            font-weight: bold;
            text-decoration: underline;
            margin: 0;
        }

        /* Liste des groupes */
        .list-group-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 10px;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        /* Bouton retour */
        .btn-back {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 10;
            border-radius: 50%;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Bouton retour -->
    <button class="btn-back" id="btnBack">
        ←
    </button>

    <!-- En-tête -->
    <div class="container">
        <div class="title-container">
            <h1 class="main-title">Cahier de Textes</h1>
        </div>
        <div class="subtitle-container">
            <h2 class="subtitle">Année universitaire : 2024/2025</h2>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="container">
        <h1 class="mb-4 text-center">Choisir un groupe pour le module : <span class="text-primary"><?php echo e($modulle->nom); ?></span></h1>
        <div class="list-group">
            <?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('seances.showForm',['id' =>$group->id])); ?>" class="list-group-item list-group-item-action">
                    <?php echo e($group->nom); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Bouton retour (par exemple, pour revenir à une page précédente)
        document.getElementById('btnBack').addEventListener('click', () => {
            window.history.back();
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\IKRAM\OneDrive\Bureau\projetphp3\cruud\cruud\resources\views/groupes/group.blade.php ENDPATH**/ ?>