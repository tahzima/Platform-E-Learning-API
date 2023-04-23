<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Random\Engine\Secure;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section = Section::all();
        return response()->json($section);
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
        $section = new Section();

        $section->libelle = $request->input('libelle');
        $section->description = $request->input('description');

        $section->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $section = Section::find($id);
        return response()->json($section);
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
        $section = Section::find($id);

        $section->libelle = $request->input('libelle');
        $section->description = $request->input('description');

        $section->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $section = Section::find($id);

        if($section){
            $section->delete();
            return response()->json(['message' => 'Section supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver Section'], 404);
    }
}
