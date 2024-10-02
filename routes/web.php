<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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


Route::get('/students/upload', [StudentController::class, 'showUploadForm']);
Route::post('/students/upload', [StudentController::class, 'uploadCsv']);

Route::get('/', function () {
    return view('welcome');
});
