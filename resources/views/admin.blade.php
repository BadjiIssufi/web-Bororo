@extends('layouts.app')

@section('content')
  <pagina tamanho="10">
    <painel titulo="Painel do Adiminstrador">
      <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

      <div class="row">
        @can('autor')
          <div class="col-md-4">
            <caixa qtd="{{$totalArtigos}}" titulo="Artigos" url="{{route('artigos.index')}}" cor="green" icone="ion ion-pie-graph"></caixa>
          </div>
        @endcan
        @can('eAdmin')
          <div class="col-md-4">
            <caixa qtd="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="green" icone="ion ion-person-stalker"></caixa>
          </div>
          <div class="col-md-4">
            <caixa qtd="{{$totalAutores}}" titulo="Autores" url="{{route('autores.index')}}" cor="green" icone="ion ion-person"></caixa>
          </div>
          <div class="col-md-4">
            <caixa qtd="{{$totalAdmin}}" titulo="Adminstradores" url="{{route('adm.index')}}" cor="green" icone="ion ion-person"></caixa>
          </div>
        @endcan

      </div>
    </painel>

  </pagina>
@endsection
