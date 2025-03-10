<?php 
namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller {
    public function index() {
        $annonces = Annonce::all();
        return view('annonce.index', compact('annonces'));
    }

    public function create() {
        return view('annonce.create');
    }

    public function store(Request $request) {
        Annonce::create($request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'superficie' => 'required|integer',
            'neuf' => 'required|boolean',
            'prix' => 'required|numeric'
        ]));

        return redirect()->route('annonces.index')->with('success', 'Annonce ajoutée avec succès.');
    }

    public function show(Annonce $annonce) {
        return view('annonce.show', compact('annonce'));
    }

    public function edit(Annonce $annonce) {
        return view('annonce.edit', compact('annonce'));
    }

    public function update(Request $request, Annonce $annonce) {
        $annonce->update($request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'superficie' => 'required|integer',
            'neuf' => 'required|boolean',
            'prix' => 'required|numeric'
        ]));

        return redirect()->route('annonces.index')->with('success', 'Annonce mise à jour.');
    }

    public function destroy(Annonce $annonce) {
        $annonce->delete();
        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée.');
    }
}