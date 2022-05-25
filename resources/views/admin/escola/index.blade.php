@extends('layout.site')

@section('titulo','escola')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Escolas</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Escola</th>
            <th>cnpj</th>
            <th>Email</th>
            <th>Etapas</th>
            <th>Situação</th>
            <th>Ato</th>
            <th>Credenciamento</th>
            <th>Vigencia Credenciamento</th>
            <th>Autorização</th>
            <th>Vigencia Autorização</th>
            
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nome_escola }}</td>
              <td>{{ $registro->cnpj }}</td>
              <td>{{ $registro->email }}</td>
              <td>{{ $registro->etapas }}</td>
              <td>{{ $registro->situacao }}</td>
              <td>{{ $registro->ato }}</td>
              <td>{{ $registro->credenciamento }}</td>
              <td>{{ $registro->vigencia_credenciamento }}</td>
              <td>{{ $registro->autorizacao }}</td>
              <td>{{ $registro->vigencia_autorizacao }}</td>              
              
              <td>
                <a class="btn blue" href="{{ route('admin.escola.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.escola.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.escola.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection
