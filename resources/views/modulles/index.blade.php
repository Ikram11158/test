@extends('base')
@section('title', 'Gestion des Modules')

@section('content')

<div class="container mx-auto p-4">
    <!-- Message de succès ou d'échec -->
    @if (Session::has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    @if (Session::has('fail'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        {{ Session::get('fail') }}
    </div>
    @endif

    <div class="bg-white shadow-md rounded my-6">
        <div class="flex justify-between items-center bg-gray-200 px-6 py-4 border-b">
            <h2 class="text-gray-700">Gestion des Modules</h2>
            <a href="{{ route('modulles.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ajouter un Nouveau Module</a>
        </div>
        <div class="p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200">ID</th>
                        <th class="py-2 px-4 border-b border-gray-200">Nom du Module</th>
                        <th class="py-2 px-4 border-b border-gray-200">Création</th>
                        <th class="py-2 px-4 border-b border-gray-200">Dernière Mise à Jour</th>
                        <th class="py-2 px-4 border-b border-gray-200" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($modulles) > 0)
                    @foreach ($modulles as $modulle)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $modulle->nom }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $modulle->created_at }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $modulle->updated_at }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <a href="{{ route('modulles.edit', $modulle->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <!-- Formulaire pour supprimer un module -->
                            <form action="{{ route('modulles.destroy', $modulle->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce module ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="py-2 px-4 border-b border-gray-200 text-center">Aucun Module trouvé !</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
