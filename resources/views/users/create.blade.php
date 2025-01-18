@extends('base')
@section('title', 'Ajouter un Utilisateur')

@section('content')
<div class="container mx-auto mt-5">
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="text-xl font-bold mb-4">Ajouter un Utilisateur</div>
        @if (Session::has('fail'))
        <span class="bg-red-500 text-white p-2 rounded">{{ Session::get('fail') }}</span>
        @endif
        <div>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom</label>
                    <input type="text" class="form-input mt-1 block w-full" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" class="form-input mt-1 block w-full" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700">Rôle</label>
                    <select class="form-select mt-1 block w-full" id="role" name="role" required>
                        <option value="teacher" {{ old('role') === 'teacher' ? 'selected' : '' }}>Professeur</option>
                        <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Administrateur</option>
                    </select>
                    @error('role')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Mot de Passe</label>
                    <input type="password" class="form-input mt-1 block w-full" id="password" name="password" required>
                    @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ajouter</button>
                    <a href="{{ route('users.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection