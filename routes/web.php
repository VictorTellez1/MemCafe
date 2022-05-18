<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NosotrosController;

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
Auth::routes(['register' => false]);
Route::get('/',[MenuController::class,'index'])->name('menu.index');
Route::get('/contacto/create',[ContactoController::class,'create'])->name('contacto.create');
Route::get('/blogIndex',[MenuController::class,'indexBlog'])->name('indexBlog');
Route::get('/cursoIndex',[MenuController::class,'indexCurso'])->name('indexCurso');
Auth::routes();
Route::group(['middleware'=>['auth']],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Seccion de nosotros
    Route::get('/nosotros/create',[NosotrosController::class,'create'])->name('nosotros.create');
    Route::post('/nosotros',[NosotrosController::class,'store'])->name('nosotros.store');
    Route::get('nosotros/{nosotros}/edit',[NosotrosController::class,'edit'])->name('nosotros.edit');
    Route::put('nosotros/{nosotros}',[NosotrosController::class,'update'])->name('nosotros.update');

    //Seccion de Cursos
    Route::get('/cursos',[CursosController::class,'index'])->name('cursos.index');
    Route::get('/cursos/create',[CursosController::class,'create'])->name('cursos.create');
    Route::post('/cursos',[CursosController::class,'store'])->name('cursos.store');
    Route::get('/cursos/{cursos}/edit',[CursosController::class,'edit'])->name('cursos.edit');
    Route::put('/cursos/{cursos}',[CursosController::class,'update'])->name('cursos.update');
    Route::delete('/cursos/{cursos}',[CursosController::class,'destroy'])->name('cursos.delete');


    //Seccion de Blog
    Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
    Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blog',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog/{blog}/edit',[BlogController::class,'edit'])->name('blog.edit');
    Route::put('/blog/{blog}',[BlogController::class,'update'])->name('blog.update');
    Route::delete('/blog/{blog}',[BlogController::class,'destroy'])->name('blog.delete');


    //Seccion de contacto

    Route::post('/contacto',[ContactoController::class,'store'])->name('contacto.store');
    Route::get('/contacto',[ContactoController::class,'index'])->name('contacto.index');
    Route::get('contacto/{contacto}',[ContactoController::class,'show'])->name('contacto.show');
    Route::get('/contacto/{contacto}/edit',[ContactoController::class,'edit'])->name('contacto.edit');
    Route::put('/contacto/{contacto}',[ContactoController::class,'update'])->name('contacto.update');
});

Route::get('/cursos/{cursos}',[CursosController::class,'show'])->name('cursos.show');
Route::get('/nosotros/{nosotros}',[NosotrosController::class,'show'])->name('nosotros.show');
Route::get('blog/{blog}',[BlogController::class,'show'])->name('blog.show');


