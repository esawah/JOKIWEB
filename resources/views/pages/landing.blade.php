<!-- resources/views/pages/landing.blade.php -->
@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-900 text-gray-100">
    <h1 class="text-5xl font-bold mb-4">Selamat Datang di Laravote</h1>
    <p class="text-lg mb-8">Aplikasi untuk memilih calon terbaik Anda!</p>
    <a href="{{ route('paslon') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Lihat Paslon
    </a>
</div>
@endsection