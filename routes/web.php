<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', HomeController::class);
Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/create', [UsuariosController::class, 'create']);
Route::get('usuarios/{usuario}', [UsuariosController::class, 'show']);
/*   
Route::get('Helloworld', function(){
    return view('helloworld');
 });
 Route::get('investigacion', function (){
      return View::make ('investigacion');
});

*/


