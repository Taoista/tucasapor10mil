<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[IndexController::class, "index"]);
Route::get("/preguntas",[IndexController::class, "preguntas"]);
Route::get("/contacto",[IndexController::class, "contacto"]);
// * seccion de compra de ticket
Route::get("/compra-ticket",[IndexController::class, "compra_ticket"]);

