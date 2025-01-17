<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des Groupes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles personnalisés -->
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

        .alert {
            border-radius: 5px;
            margin-top: 20px;
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table th, .table td {
            text-align: center;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-sm {
            padding: 5px 10px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Affichage du message de succès -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                Gestion des Groupes
                <a href="{{ route('groups.create') }}" class="btn btn-success btn-sm float-end">Ajouter un Nouveau Groupe</a>
            </div>

            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom du Groupe</th>
                            <th>Description</th>
                            <th>Création</th>
                            <th>Dernière Mise à Jour</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($groups) > 0)
                            @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->description }}</td>
                                    <td>{{ $group->created_at }}</td>
                                    <td>{{ $group->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                    </td>
                                    <td>
                                        <!-- Formulaire pour supprimer un groupe -->
                                        <form action="{{ route('groups.destroy', $group->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">Aucun Groupe trouvé !</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>