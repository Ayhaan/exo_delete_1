<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::all();
        return view('admin.membres.main', compact('membres'));
    }

    public function create()
    {
        return view('admin.membres.create');
    }
    public function store(Request $request)
    {
        $membre = new Membre();
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route('membre.index');
    }
    public function destroy(Membre $membre)
    {
        $membre->delete();
        return redirect()->back();
    }
}
