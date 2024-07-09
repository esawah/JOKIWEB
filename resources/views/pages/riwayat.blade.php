@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-4">Riwayat Vote</h2>

    @if(session('success'))
    <div class="bg-green-500 text-black p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nama</th>
                <th class="py-2 px-4 border-b">Alamat</th>
                <th class="py-2 px-4 border-b">Nama Kandidat</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-gray-800">
            @foreach ($riwayats as $riwayat)
            <tr>
                <td class="py-2 px-4 border-b">{{ $riwayat->id }}</td>
                <td class="py-2 px-4 border-b">{{ $riwayat->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $riwayat->alamat }}</td>
                <td class="py-2 px-4 border-b">{{ $riwayat->candidate->name ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($topCandidate)
    <div class="mt-6 p-4 bg-gray-800 text-white rounded-lg">
        <h3 class="text-xl font-semibold mb-2">Kandidat dengan Voting Terbanyak</h3>
        <p><strong>Nama Kandidat:</strong> {{ $topCandidate->name }}</p>
        <p><strong>Jumlah Voting:</strong> {{ $voteCounts->first()->votes }}</p>
    </div>
    @endif
</div>
@endsection
