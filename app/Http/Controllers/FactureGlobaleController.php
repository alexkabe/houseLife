<?php

namespace App\Http\Controllers;

use App\Models\FactureGlobale;
use Illuminate\Http\Request;

class FactureGlobaleController extends Controller
{
    
        //il travail avec GET
    public function index()
    {
        return FactureGlobale::all();
    }

        //il travail avec POST
    public function store(Request $request)
    {
        $facture = new FactureGlobale();
        $facture->mois = $request->mois;
        $facture->montantEau = $request->montantEau;
        $facture->montantElectricite = $request->montantElectricite;
        $facture->montantWifi = $request->montantWifi;
        
        $facture->montantFacture = $request->montantWifi 
                                +  $request->montantElectricite 
                                +  $request->montantEau;

        $facture->etatFacture = false;
        $facture->etatElectricite = false;
        $facture->etatWifi = false;
        $facture->etatEau = false;
        
        $facture->save();

        return response()->json(["Etat" => "Facture creer"], 200);
    }

        //il travail avec GET
    public function show($id)
    {
        $facture = FactureGlobale::find($id);
        return response()->json(["Facture" => $facture], 200);

    }

        //il travail avec PUT/PATCH
    public function update(Request $request, $id)
    {
        $facture = FactureGlobale::find($id);
        $facture->etatElectricite = $request->etatElectricite;
        $facture->etatWifi = $request->etatWifi;
        $facture->etatEau = $request->etatEau;
        
        $facture->save();

        return response()->json(["Status" => 'Success'], 200);
    }

    public function save(Request $request)
    {
        $facture = FactureGlobale::find($request->id);
        if($etatEau = true && $etatWifi = true && $etatElectricite = true){
            $facture->etatFacture = true;        
            $facture->save();
            return response()->json(["Status" => 'Success'], 200);
        }else{
            return response()->json(["Status" => 'Echec'], 400);            
        }
    }
    

    //il travail avec DELETE
    public function destroy($id)
    {
        $facture = FactureGlobale::where('id', $id)->delete();
    }
}
