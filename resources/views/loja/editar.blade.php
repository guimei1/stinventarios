@extends('layout.site')

@section('titulo','Lojas')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Loja</h3>
    <div class="row">
      <form class="" action="{{route('st.loja.atualizar',$loja->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('loja._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
