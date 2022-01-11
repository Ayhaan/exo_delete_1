<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class FemmeController extends Controller
{
    public function index()
    {
        $femmes= Membre::where('genre', "femme")
                ->get();
        return view('admin.femme.main', compact("femmes"));
    }
}
