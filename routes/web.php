<?php

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
use App\Http\Controllers\FormController;

route::get('/',[FormController::class, 'index']);
route::post('/',[FormController::class, 'register']);
route::get('/view',[FormController::class, 'view']);
// route::post('/view',[FormController::class, 'users']);
route::get('/view/delete/{id}',[FormController::class, 'delete'])->name('view_delete');
route::get('/view/edit/{id}',[FormController::class, 'edit'])->name('users_edit');
route::post('/view/update/{id}',[FormController::class, 'update'])->name('users_update');