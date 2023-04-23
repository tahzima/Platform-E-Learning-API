<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formation = Formation::all();
        return response()->json($formation);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formation = new Formation();

        $formation->nom = $request->input('nom');
        $formation->description = $request->input('description');
        $formation->prerequisFormation = $request->input('prerequisFormation');
        $formation->niveauDifficulte = $request->input('niveauDifficulte');
        $formation->programme = $request->input('programme');
        $formation->prix = $request->input('prix');
        $formation->dureeFormationParHeure = $request->input('dureeFormationParHeure');

        $formation->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formation = Formation::find($id);
        return response()->json($formation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formation = Formation::find($id);

        $formation->nom = $request->input('nom');
        $formation->description = $request->input('description');
        $formation->prerequisFormation = $request->input('prerequisFormation');
        $formation->niveauDifficulte = $request->input('niveauDifficulte');
        $formation->programme = $request->input('programme');
        $formation->prix = $request->input('prix');
        $formation->dureeFormationParHeure = $request->input('dureeFormationParHeure');

        $formation->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $formation = Formation::find($id);

        if($formation){
            $formation->delete();
            return response()->json(['message' => 'Formation supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver la Formation'], 404);
    }
}
