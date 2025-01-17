<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Séance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style pour les logos dans les titres */
    .title-logo, .subtitle-logo {
        height: 50px; /* Ajustez la taille selon vos besoins */
        margin-right: 10px; /* Ajout d'un espace entre le logo et le texte */
        vertical-align: middle; /* Aligne le logo au centre du texte */
    }
         body {
        background-color: #f4f6f9;
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 1200px;
        margin-top: 30px;
        text-align: center;
    }

    /* Style pour le grand titre */
    .title-container {
        border: 2px solid #28a745; /* Bordure verte */
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .main-title {
        font-size: 32px;
        color: #28a745; /* Vert */
        font-weight: bold;
        text-transform: uppercase;
        text-decoration: underline;
        margin: 0;
    }

    /* Style pour le sous-titre */
    .subtitle-container {
        border: 2px solid #6c757d; /* Bordure grise */
        padding: 15px;
        margin-bottom: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .subtitle {
        font-size: 24px;
        color: #6c757d; /* Gris */
        font-weight: bold;
        text-decoration: underline;
        margin: 0;
    }

    /* Amélioration des formulaires */
    .form-label {
        font-weight: bold;
        font-size: 16px;
    }

    .form-control, .btn {
        border-radius: 10px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color:rgb(47, 133, 0);
        border-color:rgb(47, 133, 0);
        padding: 12px 20px;
        font-size: 16px;
        font-weight: bold;
        width: 100%;
    }

    .btn-primary:hover {
        background-color:rgb(47, 133, 0);
        border-color:rgb(47, 133, 0);
    }
    </style>
</head>
<body>
<div class="container">
    <!-- Grand titre avec traits, soulignement et logo -->

</div>
<div class="container">
    <!-- Grand titre avec traits et soulignement -->
    <div class="title-container">
        <h1 class="main-title">Cahier de Textes (Semestre 1)</h1>
    </div>

    <!-- Sous-titre avec traits et soulignement -->
    <div class="subtitle-container">
        <h2 class="subtitle">Année universitaire : 2024/2025</h2>
    </div>
</div>

        <!-- Formulaire -->
        <div class="card">
            <div class="card-header">
                Formulaire de Séance
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('seances.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="idgroupe" class="form-control" value="<?php echo e($idgroupe); ?>">
                    <div class="mb-3">
                        <label for="seance" class="form-label">Séance</label>
                        <input type="text" name="seance" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="chapitre" class="form-label">Chapitre</label>
                        <input type="text" name="chapitre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="contenu_realise" class="form-label">Contenu Réalisé</label>
                        <textarea name="contenu_realise" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pedagogie" class="form-label">Pédagogie</label>
                        <input type="text" name="pedagogie" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="duree" class="form-label">Durée (en minutes)</label>
                        <input type="number" name="duree" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_seance" class="form-label">Date de la Séance</label>
                        <input type="date" name="date_seance" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="module" class="form-label">Module</label>
                        <input type="text" name="module" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="matiere" class="form-label">Matière</label>
                        <input type="text" name="matiere" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\Users\fatimaezzahra\Desktop\crud\cruud\cruud\resources\views/page1.blade.php ENDPATH**/ ?>