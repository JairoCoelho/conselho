<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);




Route::group(['middleware'=>'auth'],function(){

  Route::get('/admin/escola',['as'=>'admin.escola','uses'=>'Admin\EscolaController@index']);
  Route::get('/admin/escola/adicionar',['as'=>'admin.escola.adicionar','uses'=>'Admin\EscolaController@adicionar']);
  Route::post('/admin/escola/salvar',['as'=>'admin.escola.salvar','uses'=>'Admin\EscolaController@salvar']);
  Route::get('/admin/escola/editar/{id}',['as'=>'admin.escola.editar','uses'=>'Admin\EscolaController@editar']);
  Route::put('/admin/escola/atualizar/{id}',['as'=>'admin.escola.atualizar','uses'=>'Admin\EscolaController@atualizar']);
  Route::get('/admin/escola/deletar/{id}',['as'=>'admin.escola.deletar','uses'=>'Admin\EscolaController@deletar']);

});
