<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RiwayatController extends Controller
{
    public function index()
    {
        $riwayats = Riwayat::with('candidate')->get();

        $voteCounts = Riwayat::select('candidate_id', \DB::raw('count(*) as votes'))
                            ->groupBy('candidate_id')
                            ->orderBy('votes', 'desc')
                            ->get();

        $topCandidate = null;
        if ($voteCounts->isNotEmpty()) {
            $topCandidateId = $voteCounts->first()->candidate_id;
            $topCandidate = Candidate::find($topCandidateId);
        }

        return view('pages.riwayat', compact('riwayats', 'topCandidate', 'voteCounts'));
    }
}
