<?php

use App\Http\Controllers\FichierController;
use App\Models\Fichier;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    $images=Fichier::all();
    return view('pages.admin',compact('images'));
});
// Route::get('/fichier', function () {
//     return view('pages.fichier');
// });
Route::resource('/fichier', FichierController::class);

