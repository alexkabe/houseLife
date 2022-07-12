<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    public function index()
    {
        return Tache::all(); 
    }

    public function store(Request $request)
    {
        $tache = new Tache();

        $tache->nom = $request->nom;
        $tache->type = $request->type;
        $tache->dureeAlternance = $request->dureeAlternance;
        $tache->nombreParticipant = $request->nombreParticipant;
        $tache->idAppartement = $request->idAppartement;

        $tache->save();

        return response()->json(["Status"=>"Success"], 200);
    }

    public function show($id)
    {
        $tache = Tache::find($id);
        return response()->json(["Status"=>"Success", "tache"=> $tache], 200);

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
