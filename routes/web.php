<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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
Route::get('/',HomeController::class);

Route::get('cursos',[CursoController::class,'index']);

Route::get('cursos/create',[CursoController::class,'create']);
/*
Route::get('/', function () {
    //return view('welcome');
    return "Inicio";
});
Route::get('cursos', function () {
    //return view('welcome');
    return "Cursos";
});
Route::get('cursos/create', function () {
    return "Crear Cursos: ";
});

Route::get('cursos/{id_curso}/{id_categoria?}', function ($id_curso,$id_categoria= null) {
    
    if($id_categoria){
        return "Cursos: " . $id_curso." Categoria".$id_categoria;
    }else{
        return "Cursos: " . $id_curso;
    }
    
});*/