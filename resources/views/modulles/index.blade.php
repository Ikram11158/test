<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 CRUD - Modules</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .btn-success, .btn-primary, .btn-danger {
            border-radius: 5px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-sm {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Message de succès ou d'échec -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                Gestion des Modules
                <a href="{{ route('modulles.create') }}" class="btn btn-success btn-sm float-end">Ajouter un Nouveau Module</a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom du Module</th>
                            <th>Création</th>
                            <th>Dernière Mise à Jour</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($modulles) > 0)
                            @foreach ($modulles as $modulle)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $modulle->nom }}</td>
                                    <td>{{ $modulle->created_at }}</td>
                                    <td>{{ $modulle->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('modulles.edit', $modulle->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                    </td>
                                    <td>
                                        <!-- Formulaire pour supprimer un module -->
                                        <form action="{{ route('modulles.destroy', $modulle->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce module ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">Aucun Module trouvé !</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
