<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Professeur Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Arial', sans-serif;
            background-image: url('https://www.sydney.edu.au/content/dam/corporate/images/target/quad_campus_students.jpg'); /* Remplacez URL_DE_VOTRE_IMAGE par le chemin de votre image */
            background-size: cover; /* Pour que l'image couvre tout l'écran */
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

        .text-muted {
            font-size: 0.9rem;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-warning, .btn-danger {
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                Professeur Details
                <a href="<?php echo e(route('professeurs.index')); ?>" class="btn btn-secondary btn-sm float-end">Back to List</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Professeur Information</h5>
                <p><strong>Nom:</strong> <?php echo e($professeur->nom); ?></p>
                <p><strong>Email:</strong> <?php echo e($professeur->email); ?></p>
                <p><strong>Role:</strong> <?php echo e(ucfirst($professeur->role)); ?></p>
                <p><strong>Created At:</strong> <span class="text-muted"><?php echo e($professeur->created_at->format('d/m/Y H:i')); ?></span></p>
                <p><strong>Updated At:</strong> <span class="text-muted"><?php echo e($professeur->updated_at->format('d/m/Y H:i')); ?></span></p>
                
                <a href="<?php echo e(route('professeurs.edit', $professeur->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                <form action="<?php echo e(route('professeurs.destroy', $professeur->id)); ?>" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce professeur ?')" class="d-inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\composer\cruud\resources\views/professeurs/show.blade.php ENDPATH**/ ?>