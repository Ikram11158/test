@extends('base')
@section('title', 'Cahier de Textes')

@section('content')

<!-- En-tête -->
<div class="container mx-auto p-4">
    <div class="title-container text-center mb-4">
        <h1 class="main-title text-3xl font-bold">Cahier de Textes (Semestre 1)</h1>
    </div>
    <div class="subtitle-container text-center mb-8">
        <h2 class="subtitle text-xl text-gray-600">Année universitaire : 2024/2025</h2>
    </div>
</div>

<!-- Contenu principal -->
<div class="container mx-auto p-4">
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <div class="card-header bg-green-500 text-white p-4">
            Choisir un Module
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($modulles as $modulle)
            <li class="list-group-item border-b border-gray-200">
                <a href="{{ route('Groupe1', ['id' => $modulle->id]) }}" class="block p-4 text-gray-800 hover:bg-gray-100">
                    {{ $modulle->nom }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- JavaScript pour l'interaction -->
<script>
    // Retour au haut de la page
    document.getElementById('btnBack').addEventListener('click', () => {
        window.history.back();
    });
</script>
@endsection