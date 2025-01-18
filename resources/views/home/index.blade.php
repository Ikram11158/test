@extends('base')
@section('title', 'Home')
@section('content')

@if(Auth::check())
<div class="flex justify-center items-center m-40">
    <h2 class="text-4xl font-bold m-5"> Welcome, {{ Auth::user()->name }}!</h2>
    <a href="{{ route('modulles.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Go to Dashboard</a>
</div>
@else
<div class="flex justify-center items-center m-40">
    <h2 class="text-4xl font-bold m-5"> Welcome to our website!</h2>
    <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Login</a>
    <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Register</a>
</div>
@endif

@endsection