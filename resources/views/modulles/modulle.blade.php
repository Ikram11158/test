<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choix de Module</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles personnalisés -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .list-group-item {
            border: none;
            transition: all 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #007bff;
            color: #fff;
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);
        }

        .list-group-item:active {
            transform: scale(0.98);
        }

        .btn-back {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 10;
            border-radius: 50%;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            font-size: 1.25rem;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        /* Style pour l'en-tête */
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
            margin-bottom: 20px;
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
            <h1 class="main-title">Cahier de Textes (Semestre 1)</h1>
        </div>
        <div class="subtitle-container">
            <h2 class="subtitle">Année universitaire : 2024/2025</h2>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                Choisir un Module
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($modulles as $modulle)
                <li class="list-group-item">
                    <a href="{{ route('Groupe1', ['id' => $modulle->id]) }}" class="text-decoration-none text-dark d-block">
                        {{ $modulle->nom }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript pour l'interaction -->
    <script>
        // Retour au haut de la page
        document.getElementById('btnBack').addEventListener('click', () => {
            window.history.back();
        });
    </script>
</body>
</html>
