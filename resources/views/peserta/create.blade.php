<!-- resources/views/pages/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-5">Tambah Peserta</h2>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peserta.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="nama" class="block text-sm font-medium text-white">Nama</label>
        <input type="text" name="nama" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-gray-900">
    </div>
    <div class="mb-4">
        <label for="alamat" class="block text-sm font-medium text-white">Alamat</label>
        <textarea name="alamat" id="alamat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-gray-900"></textarea>
    </div>
    <div class="mb-4 flex ">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-10 rounded">
            Tambah Peserta
        </button>
        <a href="{{ route('peserta.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Batal
        </a>
    </div>
</form>

</div>
@endsection
