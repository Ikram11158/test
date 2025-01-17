<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails du Groupe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles personnalisés -->
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            border-radius: 10px 10px 0 0;
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
                Détails du Groupe
                <a href="{{ route('groups.index') }}" class="btn btn-secondary btn-sm float-end">Retour à la Liste</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Informations du Groupe</h5>
                <p><strong>Nom du Groupe:</strong> {{ $group->name }}</p>
                <p><strong>Description:</strong> {{ $group->description }}</p>
                <p><strong>Créé le:</strong> <span class="text-muted">{{ $group->created_at->format('d/m/Y H:i') }}</span></p>
                <p><strong>Mis à Jour le:</strong> <span class="text-muted">{{ $group->updated_at->format('d/m/Y H:i') }}</span></p>
                
                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                <form action="{{ route('groups.destroy', $group->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ?')" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
