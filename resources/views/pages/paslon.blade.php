<!-- resources/views/pages/paslon.blade.php -->
@extends('layouts.app')

@section('content')
<div>
    <h2 class="text-3xl font-bold mb-5 flex items-center justify-center">Paslon Capres & Cawapres</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card for candidates -->
        @foreach ($candidates as $candidate)
        <div class="bg-gray-800 p-5 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">No Urut {{ $candidate->number }}</h2>
            <img src="{{ asset('images/' . $candidate->image) }}" alt="Candidate Image" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold">{{ $candidate->name }}</h3>
            <p class="mt-2">{{ $candidate->description }}</p>
            <button class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-candidate-id="{{ $candidate->id }}" onclick="openModal(this)">
                Vote
            </button>
        </div>
        @endforeach
    </div>

    <h2 class="text-3xl pt-8 font-bold mb-5 flex items-center justify-center">Paslon Gubernur Jawa Barat</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card for candidates -->
        @foreach ($gubernurCandidates as $candidate)
        <div class="bg-gray-800 p-5 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">No Urut {{ $candidate->number }}</h2>
            <img src="{{ asset('images/' . $candidate->image) }}" alt="Candidate Image" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold">{{ $candidate->name }}</h3>
            <p class="mt-2">{{ $candidate->description }}</p>
            <button class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-candidate-id="{{ $candidate->id }}" onclick="openModal(this)">
                Vote
            </button>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div id="voteModal" class="fixed inset-0 z-50 flex justify-center items-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-5 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold mb-4 text-black">Vote for Candidate</h2>
        <form id="voteForm" method="POST" action="{{ route('storeVote') }}">
            @csrf
            <input type="hidden" id="candidate_id" name="candidate_id">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full border text-black border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="mt-1 block w-full border text-black border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex justify-end">
                <button type="button" class="mr-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" onclick="closeModal()">Cancel</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
        <div id="successMessage" class="hidden text-green-500 font-semibold mt-4">Vote berhasil!</div>
    </div>
</div>

<script>
function openModal(button) {
    var candidateId = button.getAttribute('data-candidate-id');
    document.getElementById('candidate_id').value = candidateId;
    document.getElementById('voteModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('voteModal').classList.add('hidden');
}

document.getElementById('voteForm').addEventListener('submit', function() {
    setTimeout(function() {
        document.getElementById('successMessage').classList.remove('hidden');
        setTimeout(function() {
            document.getElementById('successMessage').classList.add('hidden');
            closeModal();
        }, 2000); // hide message after 2 seconds
    }, 100); // delay to allow form submission
});
</script>
@endsection