<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Séance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style général */
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
            border: 2px solid #007bff; /* Bordure bleue */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(90deg, #007bff, #0056b3); /* Dégradé bleu */
            color: white;
        }

        .main-title {
            font-size: 32px;
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
            background: linear-gradient(90deg, #e9ecef, #d6d8db); /* Dégradé gris clair */
            color: #343a40; /* Gris foncé */
        }

        .subtitle {
            font-size: 24px;
            font-weight: bold;
            text-decoration: underline;
            margin: 0;
        }

        /* Amélioration du formulaire */
        .card {
            max-width: 600px; /* Taille réduite pour un aspect compact */
            margin: 0 auto; /* Centrer le formulaire */
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Ombre subtile */
        }

        .card-header {
            background: linear-gradient(90deg, #0056b3, #003d80); /* Dégradé bleu foncé */
            color: white;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-body {
            padding: 20px 30px;
        }

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
            background: linear-gradient(90deg, #007bff, #0056b3); /* Dégradé bleu */
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #003d80); /* Dégradé bleu foncé */
        }
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

@extends('layout.navbar')

<button class="btn-back" id="btnBack">
        ←
    </button>
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
<div class="container">
    <div class="card">
        <div class="card-header">
            Formulaire de Séance
        </div>
        <div class="card-body">
            <form action="{{ route('seances.store') }}" method="POST">
                @csrf
                <input type="hidden" name="idgroupe" class="form-control" value="{{$idgroupe}}">
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
<script>
        // Retour au haut de la page
        document.getElementById('btnBack').addEventListener('click', () => {
            window.history.back();
        });
    </script>
</body>
</html>
