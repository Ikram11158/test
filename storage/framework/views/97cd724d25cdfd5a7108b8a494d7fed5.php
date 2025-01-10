<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de Gestion des PFE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #343a40;
            color: white;
            padding: 2rem 0;
        }
        .card {
            margin-bottom: 2rem;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .card-body {
            background-color: #ffffff;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header text-center">
        <h1>Bienvenue sur l'application de gestion des PFE</h1>
        <p>Une plateforme dédiée à la gestion des projets de fin d'études des étudiants</p>
    </div>

    <!-- Container Section -->
    <div class="container">
        <!-- Admin Section -->
        <div class="card">
            <div class="card-header text-center">
                <h3>Tableau de bord Administrateur</h3>
            </div>
            <div class="card-body text-center">
                <p>En tant qu'administrateur, vous pouvez gérer les utilisateurs (professeurs et étudiants), les projets de fin d'études et les soutenances.</p>
                <a href="#" class="btn btn-custom">Gérer les utilisateurs</a>
                <a href="#" class="btn btn-custom">Gérer les étudiants</a>
                <a href="#" class="btn btn-custom">Gérer les projets</a>
            </div>
        </div>

        <!-- Professor Section -->
        <div class="card">
            <div class="card-header text-center">
                <h3>Tableau de bord Professeur</h3>
            </div>
            <div class="card-body text-center">
                <p>En tant que professeur, vous pouvez consulter les rapports des PFE qui vous sont associés, en tant que rapporteur ou encadrant, ainsi que vos soutenances.</p>
                <a href="#" class="btn btn-custom">Voir les rapports</a>
                <a href="#" class="btn btn-custom">Voir les soutenances</a>
            </div>
        </div>

        <!-- Student Section -->
        <div class="card">
            <div class="card-header text-center">
                <h3>Tableau de bord Étudiant</h3>
            </div>
            <div class="card-body text-center">
                <p>En tant qu'étudiant, vous pouvez soumettre vos rapports et suivre les retours de vos encadrants et rapporteurs.</p>
                <a href="#" class="btn btn-custom">Téléverser mon rapport</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center p-4 mt-5" style="background-color: #343a40; color: white;">
        <p>&copy; 2024 Application de Gestion des PFE. Tous droits réservés.</p>
    </footer>

</body>
</html>
<?php /**PATH C:\composer\cruud\resources\views/welcome.blade.php ENDPATH**/ ?>