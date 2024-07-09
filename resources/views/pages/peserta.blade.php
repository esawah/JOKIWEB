<!-- resources/views/peserta.blade.php
@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-5">
        <h2 class="text-3xl font-bold">Daftar Peserta</h2>
        <a href="{{ route('peserta') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Peserta
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th scope="col" class="py-2 px-4 text-left">Nama</th>
                    <th scope="col" class="py-2 px-4 text-left">Alamat</th>
                    <th scope="col" class="py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-800">
                <!-- @foreach($pesertas as $peserta)
                <tr>
                    <td class="py-2 px-4">{{ $peserta->nama }}</td>
                    <td class="py-2 px-4">{{ $peserta->alamat }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ route('peserta.show', $peserta->id) }}" class="text-blue-500 hover:text-blue-700">Detail</a>
                        <span class="mx-1">|</span>
                        <a href="{{ route('peserta.edit', $peserta->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach -->
            <!-- </tbody>
        </table>
    </div>
</div>
@endsection --> -->
