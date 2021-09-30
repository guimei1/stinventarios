@extends('layout.site')

@section('titulo','Redes')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Rede</h3>
    <div class="row">
      <form class="" action="{{route('st.rede.atualizar',$rede->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('rede._form')
        <button class="btn deep-orange col s12">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
