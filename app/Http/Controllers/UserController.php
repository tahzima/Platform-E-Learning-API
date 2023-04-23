<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
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
        $user = new User();

        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->email = $request->input('email');

        $user->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
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
        $user = User::find($id);

        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->email = $request->input('email');

        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if($user){
            $user->delete();
            return response()->json(['message' => 'User supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver l User'], 404);
    }
}
