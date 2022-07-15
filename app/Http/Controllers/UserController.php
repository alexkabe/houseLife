<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     
    public function index()
    {
        return User::where('id', '>', 0)->get();
    }

    
    public function store2(Request $request)
    {
        // $user = new User();

        // $user->nom = $request->nom;
        // $user->prenom = $request->prenom;
        // $user->contact = $request->contact;
        
        // $user->email = $request->email;
        // $user->name = $request->nom;
        // $user->password = $request->password;
        // echo 'nom:'.$request->nom;
        // echo 'prenom:'.$request->prenom;
        // echo 'contact:'.$request->contact;
        // echo 'email:'.$request->email;
        // echo 'password:'.$request->password;
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact' => $request->contact,
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);
        echo $request->nom;
        // $token="";
        $token = $user->createToken('my_token')->plainTextToken;
        // $user->save();
        
        return response()->json(["Status"=>"Success", 'Token' => $token], 200);
    }
    
    public function store(Request $request) {
        echo 'Je suis la';
        echo 'name:'.$request->name;
        // $fields = $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|string|unique:users,email',
        //     'password' => 'required|string|confirmed'
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'contact' => $request->contact
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json(['Status' =>'Success',
            'User' => $user
        ]);
    }


    public function login(Request $request){
        // $token2 = $request->only('email', 'password');

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        echo $request->email;
        // if (!Auth::attempt(($request->only('email', 'password')))){
            //     return response()->json(['Status' => 'Echoue', 
            //          'message' =>'Identifiants invalides'
            // ], 401);
            // }
            
        $user = User::where('email', $request['email'])->firstOrFail();
        $token2 = Auth::attempt($credentials);
        echo $user->tokens;
        // 2019_12_14_000001_create_personal_access_tokens_table.php
        // $token = $user->createToken('auth_token')->plainTextToken;
        
        return response()->json([
            'access_token' => $token2,
            'token_type' => 'Bearer',
        ], 401);
    }
    
    public function me(Request $request)
    {

        return response()->json([
            'access_token' => "Tu es authentifier",
            'token_type' => 'Bearer',
        ], 401);
    }

    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        //
    }
}
