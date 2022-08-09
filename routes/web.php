<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/about', function(){

    $staff = [
        ["id" => 1, "name" => "Federico", "surname" => "Stravecchio", "age" => 34],
        ["id" => 2, "name" => "Gianni", "surname" => "De Girolamo", "age" => 32],
        ["id" => 3, "name" => "Valentina", "surname" => "Brambilla", "age" => 30],
        ["id" => 4, "name" => "Stephanie", "surname" => "Smith", "age" => 29],
        ["id" => 5, "name" => "Jason", "surname" => "Connors", "age" => 37],
        ["id" => 6, "name" => "Lisa", "surname" => "Baker", "age" => 35],
        ["id" => 7, "name" => "Paola", "surname" => "Hernandez", "age" => 34],
    ];




    return view('chisiamo', ["staff" => $staff]);    
})->name('chisiamo');

 Route::get("/dettagli/staff/{id}", [PublicController::class, 'staffDetail'])->name("dettagli-staff");   

