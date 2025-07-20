<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MymodelController;


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
// Route::get('/', function ()  {
//     return view('projects.create');
    
// });

Route::resource('mymodel' ,MymodelController::class );

// Route::get('/', [MymodelController::class , 'index' ] );
// Route::get('/', [MymodelController::class , 'create' ] );
// Route::post('/store', [MymodelController::class , 'store' ] );



    
    
