<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    public function index()
    {
        return Appartement::orderByDesc('nom')->get();
    }

    public function store(Request $request)
    {
        $app = new Appartement();
        
        $app->nom = $request->nom;
        $app->montant = $request->montant;
        $app->etatSuppression = false;
        echo $app;
        
        $app->save();

        return response()->json(['appartements'=> Appartement::all()], 200);
        
    }

    public function show($id)
    {
        $app = Appartement::find($id);
        $taches = Appartement::find($id)->taches;
        $users = Appartement::find($id)->users;
        $factureGlobales = Appartement::find($id)->factureGlobales;

        return response()->json([
            "Status"=> "Success", 
            "Appartement" => [
                'id' => $app->id,
                'nom' => $app->nom,
                'montant' => $app->montant,
                'users'=>$users,
                'factureGlobales'=>$factureGlobales,
                'taches'=>$taches
            ]], 200);
    }


    public function update(Request $request, $id)
    {   
        $app = Appartement::find($id);

        $app->nom = $request->nom;
        $app->montant = $request->montant;
        

        $app->save();
        return response()->json(['Mise a jour'=>$app], 200);
    }
    
    public function destroy($id)
    {
        $app = Appartement::where('id', $id)->delete();
        return response()->json(['Mise a jour'=>$app], 200);
    }
}
