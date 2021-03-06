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
        request()->validate([
            "nom" => ["required", "min:2"],
            "age" => ["required", "numeric"],
            "genre" => ["required"]
        ]);
        

        $membre = new Membre();
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route('membre.index')->with('success', 'Validation');
    }
    public function destroy(Membre $membre)
    {
        $membre->delete();
        return redirect()->back()->with('warning', 'Delete');
    }

    public function show(Membre $membre)
    {
        return view('admin.membres.show', compact('membre'));
    }


    public function edit(Membre $membre)
    {
        return view('admin.membres.edit', compact('membre'));
    }

    public function update(Request $request, Membre $membre)
    {
       
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route('membre.index');
    }
}
