<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class PaslonController extends Controller
{
    public function index()
    {
        $candidates = Candidate::where('type', 'capres')->get();
        $gubernurCandidates = Candidate::where('type', 'gubernur')->get();
        return view('pages.paslon', compact('candidates', 'gubernurCandidates'));
    }
}