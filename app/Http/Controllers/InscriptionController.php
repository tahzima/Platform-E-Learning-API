<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\ControllerDoesNotReturnResponseException;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscription = Inscription::all();
        return response()->json($inscription);
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
        $inscription = new Inscription();

        $inscription->dateInscription = $request->input('dateInscription');
        $inscription->status = $request->input('status');
        $inscription->prix = $request->input('prix');

        $inscription->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inscription = Inscription::find($id);
        return response()->json($inscription);
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
        $inscription = Inscription::find($id);

        $inscription->dateInscription = $request->input('dateInscription');
        $inscription->status = $request->input('status');
        $inscription->prix = $request->input('prix');

        $inscription->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscription = Inscription::find($id);

        if($inscription){
            $inscription->delete();
            return response()->json(['message' => 'Inscription supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver l inscription'], 404);
    }
}
