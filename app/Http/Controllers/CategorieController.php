<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();

        $categorie->libelle = $request->input('libelle');
        $categorie->description = $request->input('description');

        $categorie->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categorie::find($id);
        return response()->json($categories);
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
        $categorie = Categorie::find($id);

        $categorie->libelle = $request->input('libelle');
        $categorie->description = $request->input('description');
        $categorie->parent_id = $request->input('parent_id');

        $categorie->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = Categorie::find($id);

        if($categorie){
            $categorie->delete();
            return response()->json(['message' => 'Catégorie supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver la catégorie'], 404);
    }
}
