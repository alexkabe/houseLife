<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     
    public function index()
    {
        //
    }

    
    public function store(Request $request)
    {
        return User::all();
    }

    
    public function show($id)
    {
        $user = User::find($id);
        return response()->json(['Status' =>'Success',
            'User' => $user
        ]);
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
