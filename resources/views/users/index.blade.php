@extends('base')
@section('title', 'User Details')

@section('content')

<div class="container mx-auto">
    <!-- Affichage du message de succès -->
    @if (Session::has('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="bg-white shadow-md rounded my-6 border border-gray-400">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            Gestion des Utilisateurs
            <a href="{{ route('users.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Ajouter un Nouvel Utilisateur</a>
        </div>

        @if (Session::has('success'))
        <span class="bg-green-500 text-white p-2 rounded block mb-4">{{ Session::get('success') }}</span>
        @endif
        @if (Session::has('fail'))
        <span class="bg-red-500 text-white p-2 rounded block mb-4">{{ Session::get('fail') }}</span>
        @endif

        <div class="p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nom</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Rôle</th>
                        <th class="py-2 px-4 border-b">Création</th>
                        <th class="py-2 px-4 border-b">Dernière Mise à Jour</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                    @foreach ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->created_at }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->updated_at }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <!-- Formulaire pour supprimer un utilisateur -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="py-2 px-4 border-b text-center">Aucun Utilisateur trouvé !</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white shadow-md rounded my-6 border border-gray-400">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            Gestion des Modules
            <a href="{{ route('modulles.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Ajouter un Nouveau Module</a>
        </div>

        @if (Session::has('success'))
        <span class="bg-green-500 text-white p-2 rounded block mb-4">{{ Session::get('success') }}</span>
        @endif
        @if (Session::has('fail'))
        <span class="bg-red-500 text-white p-2 rounded block mb-4">{{ Session::get('fail') }}</span>
        @endif

        <div class="p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nom du Module</th>
                        <th class="py-2 px-4 border-b">Création</th>
                        <th class="py-2 px-4 border-b">Dernière Mise à Jour</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($modulles) > 0)
                    @foreach ($modulles as $modulle)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $modulle->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $modulle->created_at }}</td>
                        <td class="py-2 px-4 border-b">{{ $modulle->updated_at }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('modulles.edit', $modulle->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <!-- Formulaire pour supprimer un module -->
                            <form action="{{ route('modulles.destroy', $modulle->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce module ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="py-2 px-4 border-b text-center">Aucun Module trouvé !</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection