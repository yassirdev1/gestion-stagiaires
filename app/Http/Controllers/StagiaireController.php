<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
   public function dashboard()
{
    $total = Stagiaire::count();

    $fullstack = Stagiaire::where('filiere', 'DEVELOPPEMENT WEB FULL STACK')->count();
    $dev = Stagiaire::where('filiere', 'DEV')->count();
    $autres = $total - ($fullstack + $dev);

    return view('dashboard', compact('total', 'fullstack', 'dev', 'autres'));
}
    public function index(Request $request)
    {
        $search = $request->search;

        $stagiaires = Stagiaire::when($search, function ($query, $search) {
            return $query->where('nom', 'like', "%{$search}%")
                ->orWhere('prenom', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('ecole', 'like', "%{$search}%")
                ->orWhere('filiere', 'like', "%{$search}%");
        })->get();

        return view('stagiaires.index', compact('stagiaires'));
    }

    public function create()
    {
        return view('stagiaires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'ecole' => 'required',
            'filiere' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        Stagiaire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'ecole' => $request->ecole,
            'filiere' => $request->filiere,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire ajouté avec succès');
    }

    public function edit($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaires.edit', compact('stagiaire'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'ecole' => 'required',
            'filiere' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        $stagiaire = Stagiaire::findOrFail($id);

        $stagiaire->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'ecole' => $request->ecole,
            'filiere' => $request->filiere,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire modifié avec succès');
    }

    public function destroy($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->delete();

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire supprimé avec succès');
    }
}