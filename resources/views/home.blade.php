@extends('layout.site')

@section('titulo','CME')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Escolas</h3>
    <div class="row">
      @foreach($escolas as $escola)
        <div >
          <div class="card">
            <div class="card-image">
              
            </div>
            <div class="card-content">
              <h4>{{$escola->titulo}}</h4>
              
            </div>
            <div class="card-action">
              
            </div>
          </div>
        </div>
      @endforeach
    </div>


  </div>




@endsection
