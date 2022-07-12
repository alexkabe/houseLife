<?php

namespace App\Http\Controllers;

use App\Models\FactureGlobale;
use Illuminate\Http\Request;

class FactureGlobaleController extends Controller
{
    
    public function index()
    {
        return FactureGlobale::all();
    }

    public function store(Request $request)
    {
        //
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
