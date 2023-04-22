<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaire = Commentaire::all();
        return response()->json($commentaire);
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
        $commentaire = new Commentaire();

        $commentaire->body = $request->input('body');


        $commentaire->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commentaire = Commentaire::find($id);
        return response()->json($commentaire);
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
        $commentaire = Commentaire::find($id);

        $commentaire->body = $request->input('body');



        $commentaire->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commentaire = Commentaire::find($id);

        if($commentaire){
            $commentaire->delete();
            return response()->json(['message' => 'Commentaire supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver le Commentaire'], 404);
    }
}
