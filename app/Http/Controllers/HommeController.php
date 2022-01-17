<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HommeController extends Controller
{
    public function index()
    {
        $hommes= Membre::where('genre', "homme")
                ->take(4)      //limit(3)
                ->get();
        return view('admin.homme.main', compact('hommes'));
    }
}
