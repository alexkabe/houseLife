<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    public function index()
    {
        return Poste::all();
    }


    public function store(Request $request)
    {
        $poste = new Poste();

        $poste->auteur = $request->auteur;
        $poste->message = $request->message;
        $poste->dateDebut = $request->dateDebut;
        $poste->dateFin = $request->dateFin;
        $poste->duree = $request->duree;
        $poste->etat = false;

        $poste->save();
        return response()->json(["Status" => "Success"], 200);
    }

    public function show($id)
    {
        $poste = Poste::find($id);
        return response()->json(["Status"=>"Success", "poste"=> $poste], 200);
    }

    public function update(Request $request, $id)
    {
        $poste = Poste::find($request->id);

        $poste->message = $request->message;
        $poste->dateDebut = $request->dateDebut;
        $poste->dateFin = $request->dateFin;
        $poste->duree = $request->duree;
        
        $poste->save();
        return response()->json(["Status"=>"Success"], 200);
    }

    public function destroy($id)
    {
        //
    }
}
