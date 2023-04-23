<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $like = Like::all();
        return response()->json($like);
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
        $like = new Like();

        $like->nombreLike = $request->input('nombreLike');

        $like->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $like = Like::find($id);
        return response()->json($like);
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
        $like = Like::find($id);

        $like->nombreLike = $request->input('nombreLike');

        $like->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $like = Like::find($id);

        if($like){
            $like->delete();
            return response()->json(['message' => 'Like supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver Like'], 404);
    }
}
