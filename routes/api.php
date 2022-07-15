<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FactureGlobaleController;
use App\Http\Controllers\FactureUserController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\UserController;
use App\Models\Poste;
use App\Models\User;
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

Route::post('/register', [AuthController::class, 'register']);
// Route::resources([
//     'appartement' => AppartementController::class,
//     'user' => UserController::class,
// ]);

// Route::resource('appartement', AppartementController::class)
//     ->missing(function (Request $request){
//             return Redirect::route('/');
// });

Route::apiResources([
    // 'appartement' => AppartementController::class,
    'factureGlobale' => FactureGlobaleController::class,
    'factureUser' => FactureUserController::class,
    'user' => UserController::class,
    'poste' => PosteController::class,
    'tache' => TacheController::class ,
]);


// Route::post('/tokens/create', function (Request $request) {
//     $token = User::find($request->id)->createToken('mytoken');
 
//     return ['token' => $token->plainTextToken];
// });

// les routes specifique de toutes classe



// Appartement
Route::apiResource('appartement', AppartementController::class)->only([
    'index', 'store', 'destroy', 'show'
]);




// FactureGlobale
Route::apiResource('factureGlobale', FactureGlobaleController::class)->only([
    'index', 'store', 'destroy', 'show'
]);
Route::post('/saveFacture', [FactureGlobaleController::class, 'save']);

//FactureUser
Route::apiResource('factureUser', FactureUserController::class)->only([
    'index', 'store', 'destroy', 'show'
]);

// User
Route::apiResource('user', UserController::class)->only([
    'index', 'store', 'destroy', 'show'
]);
Route::get('/me', [UserController::class, 'me']);
Route::post('/login', [UserController::class, 'login']);

//Poste
Route::apiResource('poste', PosteController::class)->only([
    'index', 'store', 'destroy', 'show'
]);

Route::get('posteOrder', [PosteController::class, 'order']);


// Tache
Route::apiResource('tache', TacheController::class)->only([
    'index', 'store', 'destroy', 'show'
]);