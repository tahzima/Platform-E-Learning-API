<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $part = Part::all();
        return response()->json($part);
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
        $part = new Part();

        $part->libelle = $request->input('libelle');
        $part->description = $request->input('description');
        $part->videoUrl = $request->input('videoUrl');
        $part->imageUrl = $request->input('imageUrl');

        $part->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $part = Part::find($id);
        return response()->json($part);
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
        $part = Part::find($id);

        $part->libelle = $request->input('libelle');
        $part->description = $request->input('description');
        $part->videoUrl = $request->input('videoUrl');
        $part->imageUrl = $request->input('imageUrl');

        $part->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $part = Part::find($id);

        if($part){
            $part->delete();
            return response()->json(['message' => 'Part supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver Part'], 404);
    }
}
