<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'nullable|string',
        ]);

        Riwayat::create([
            'candidate_id' => $request->candidate_id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('paslon')
                         ->with('success', 'Vote berhasil!');
    }
    
}
