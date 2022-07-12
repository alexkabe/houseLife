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
        
    }

    public function show($id)
    {
        //
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
