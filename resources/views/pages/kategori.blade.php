<!-- resources/views/pages/kategori.blade.php -->
@extends('layouts.app')

@section('content')
<div>
    <h2 class="text-3xl font-bold mb-5 flex items-center justify-center">Kategori Paslon</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Repeat category card as needed -->
        <div class="bg-gray-800 p-5 rounded-lg shadow-md">
            <img src="{{ asset('images/pemilu2024.jpeg') }}" alt="Kategori Image" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold">Presiden & Calon Presiden RI</h3>
            <p class="mt-2">Short description about the kategori.</p>
            <a href="{{ route('paslon') }}" class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center block">
                Lihat Paslon
            </a>
        </div>
        <!-- Add more category cards as needed -->
        <div class="bg-gray-800 p-5 rounded-lg shadow-md">
            <img src="{{ asset('images/pemilu2024.jpeg') }}" alt="Kategori Image" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold">Gubernur & Calon Gubernur JABAR</h3>
            <p class="mt-2">Short description about the kategori.</p>
            <a href="{{ route('paslon') }}" class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center block">
                Lihat Paslon
            </a>
        </div>
    </div>
</div>
@endsection