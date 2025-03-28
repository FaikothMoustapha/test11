<?php

use App\Http\Controllers\EcolesController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\Type_stagesController;
use App\Models\Ecoles;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});


// Route::get('/accueil', function () {
//     return view('accueil');
// });

Route::get('/list', function () {
    return view('Stagiaires.list_stagiaires');
});
Route::get('/add', function () {
    return view('Stagiaires.add_stagiaires');
});

Route::get('/stagiaire/list',[StagiairesController::class,'list'])->name('list_stagiaire');
Route::get('/stagiaire/add',[StagiairesController::class,'add'])->name('add_stagiaire');
Route::post('/stagiaire/store',[StagiairesController::class,'store'])->name('store_stagiaire');
Route::get('/stagiaire/edit/{id}', [StagiairesController::class, 'edit'])->name('edit_stagiaire');
Route::post('/stagiaire/update/{id}', [StagiairesController::class, 'update'])->name('update_stagiaire');
Route::get('/stagiaire/show/{id}', [StagiairesController::class, 'show'])->name('show_stagiaire');
Route::get('/stagiaire/delete/{id}', [StagiairesController::class, 'delete'])->name('delete_stagiaire');



Route::get('/filiere/list',[FiliereController::class,'list'])->name('list_filiere');
Route::get('/filiere/add',[FiliereController::class,'add'])->name('add_filiere');
Route::post('/filiere/store',[FiliereController::class,'store'])->name('store_filiere');
Route::get('/filiere/edit/{id}', [FiliereController::class, 'edit'])->name('edit_filiere');
Route::post('/filiere/update/{id}', [FiliereController::class, 'update'])->name('update_filiere');
Route::get('/filiere/delete/{id}', [FiliereController::class, 'delete'])->name('delete_filiere');




Route::get('/type_stage/list',[Type_stagesController::class,'list'])->name('list_type');


Route::get('/ecole/add',[EcolesController::class,'add'])->name('add_ecole');
Route::get('/ecole/list',[EcolesController::class,'list'])->name('list_ecole');
Route::post('/ecole/store',[EcolesController::class,'store'])->name('store_ecole');
Route::get('/ecole/edit/{id}', [EcolesController::class, 'edit'])->name('edit_ecole');
Route::post('/ecole/update/{id}', [EcolesController::class, 'update'])->name('update_ecole');
Route::get('/ecole/show/{id}', [EcolesController::class, 'show'])->name('show_ecole');
Route::get('/ecole/delete/{id}', [EcolesController::class, 'delete'])->name('delete_ecole');


