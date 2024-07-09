@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-5">
        <h2 class="text-3xl font-bold">Daftar Peserta</h2>
        <a href="{{ route('peserta.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Peserta
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr >
                    <th scope="col" class="py-2 px-4 text-center">Nama</th>
                    <th scope="col" class="py-2 px-4 text-center">Alamat</th>
                    <th scope="col" class="py-2 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-800">
                @foreach($pesertas as $peserta)
                    <tr>
                        <td class="py-2 px-4 text-center">{{ $peserta->nama }}</td>
                        <td class="py-2 px-4 text-center">{{ $peserta->alamat }}</td>
                        <td class="py-2 px-4 text-center">
                            <button class="bg-blue-600 w-32">
                                <a href="{{ route('peserta.edit', $peserta->id) }}" class="text-white hover:text-blue-700">Edit</a>
                            </button>
                            <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white hover:text-red-700 bg-red-500 w-32" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection