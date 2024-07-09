@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-5">
        <h2 class="text-3xl font-bold">Edit Peserta</h2>
        <a href="{{ route('peserta.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Kembali
        </a>
    </div>

    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <form action="{{ route('peserta.update', $peserta->id) }}" method="POST" class="p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $peserta->nama }}" class="mt-1 text-gray-900 w-full border border-gray-300 rounded-md h-10">
                @error('nama')
                    <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" class="mt-1 block text-gray-900 w-full border border-gray-300 rounded-md ">{{ $peserta->alamat }}</textarea>
                @error('alamat')
                    <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
