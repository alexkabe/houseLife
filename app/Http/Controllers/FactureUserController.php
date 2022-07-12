<?php

namespace App\Http\Controllers;

use App\Models\FactureUser;
use Illuminate\Http\Request;

class FactureUserController extends Controller
{
    
    public function index()
    {
        return FactureUser::all();
    }

        //il travail avec POST
    public function store(Request $request)
    {
        $facture = new FactureUser();
        $facture->mois = $request->mois;
        $facture->montant = $request->montant;
        $facture->type = $request->type;
        $facture->idUser = $request->idUser;
        $facture->etat = false;
        
        $facture->save();

        return response()->json(["Status" => "Success","Etat" => "Facture creer"], 200);
    }

        //il travail avec GET
    public function show($id)
    {
        $facture = FactureUser::find($id);
        return response()->json(["Status" => "Success","Facture" => $facture], 200);

    }

        //il travail avec PUT/PATCH
    public function update(Request $request, $id)
    {
        $facture = FactureUser::find($id);
        $facture->etat = true;
        
        $facture->save();

        return response()->json(["Status" => 'Success'], 200);
    }
    

    //il travail avec DELETE
    public function destroy($id)
    {
        $facture = FactureUser::where('id', $id)->delete();
    }
}
