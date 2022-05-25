@extends('layout.site')

@section('titulo','escola')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Escola</h3>
    <div class="row">
      <form class="" action="{{route('admin.escola.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.escola._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
