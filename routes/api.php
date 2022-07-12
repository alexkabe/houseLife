<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\FactureGlobaleController;
use App\Http\Controllers\FactureUserController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\UserController;
use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::resources([
//     'appartement' => AppartementController::class,
//     'user' => UserController::class,
// ]);

// Route::resource('appartement', AppartementController::class)
//     ->missing(function (Request $request){
//             return Redirect::route('/');
// });

Route::apiResources([
    'appartement' => AppartementController::class,
    'factureGlobale' => FactureGlobaleController::class,
    'factureUser' => FactureUserController::class,
    'user' => UserController::class,
    'poste' => PosteController::class,
    'tache' => TacheController::class ,
]);


// les routes specifique de toutes classe

// Appartement


// FactureGlobale


//FactureUser


// User


//Poste
Route::get('posteOrder', [PosteController::class, 'order']);


// Tache
