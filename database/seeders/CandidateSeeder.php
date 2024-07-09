<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    public function run()
    {
        Candidate::create([
            'name' => 'Anies & Cak Imin',
            'description' => 'Short description about the candidate.',
            'image' => 'cdt1.png',
            'number' => 1,
            'type' => 'capres'
        ]);

        Candidate::create([
            'name' => 'Prabroro & Gibran',
            'description' => 'Short description about the candidate.',
            'image' => 'cdt2.png',
            'number' => 2,
            'type' => 'capres'
        ]);

        // Tambahkan kandidat lainnya sesuai kebutuhan...

        Candidate::create([
            'name' => 'Ridwan Kamil',
            'description' => 'Short description about the candidate.',
            'image' => 'ridwankamil.png',
            'number' => 1,
            'type' => 'gubernur'
        ]);

        Candidate::create([
            'name' => 'Dedi Mulyadi',
            'description' => 'Short description about the candidate.',
            'image' => 'dedimulyadi.jpg',
            'number' => 2,
            'type' => 'gubernur'
        ]);

        // Tambahkan kandidat lainnya sesuai kebutuhan...
    }
}

