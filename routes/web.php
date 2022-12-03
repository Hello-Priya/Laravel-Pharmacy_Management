<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
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
    return view('backend.master');
});
Route::get('/dashboard-admin',[DashboardController::class,'home'])->name('dashboard');
Route::get('category-list-show',[DashboardController::class,'list'])->name('show');
Route::get('category-create',[DashboardController::class,'form'])->name('create.form');


Route::get('category-data-store',[CategoryController::class,'store'])->name('storedata');
Route::get('napa',[DashboardController::class,'nipa'])->name('napa');
Route::post('napa-form',[DashboardController::class,'skip'])->name('napa-form');
Route::get('category-table',[CategoryController::class,'table'])->name('category-table');
Route::get('create_form',[CategoryController::class,'form'])->name('create_form');
Route::get('customer-show',[CategoryController::class,'show'])->name('customer.show');
Route::post('/customer-form',[CategoryController::class,'form_store'])->name('customer.store');
Route::get('/Delete_form /{id}',[CategoryController::class,'delete'])->name('customer.delete');


Route::get('/edit-data/{id}',[CategoryController::class,'Edit_form'])->name('customer.edit');
Route::put('/Update-data/{id}',[CategoryController::class,'update_form'])->name('customer.update');


