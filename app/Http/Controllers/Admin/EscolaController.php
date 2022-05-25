<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Escola;

class EscolaController extends Controller
{
    public function index()
    {
      $registros = Escola::all();
      return view('admin.escola.index',compact('registros'));
    }
    public function adicionar()
    {
      return view('admin.escola.adicionar');
    }
    public function salvar(Request $req)
    {
      $dados = $req->all();

      Escola::create($dados);

      return redirect()->route('admin.escola.salvar');

    }

    public function editar($id)
    {
      $registro = Escola::find($id);
      return view('admin.escola.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      
      

      Escola::find($id)->update($dados);

      return redirect()->route('admin.escola');

    }

    public function deletar($id)
    {
      Escola::find($id)->delete();
      return redirect()->route('admin.escola');
    }

}
