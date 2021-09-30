@extends('layout.site')

@section('titulo','Lojas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Loja</h3>
        <div class="row">
            <form class="" action="{{route('st.loja.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('loja._form')
                <div class="col s12">
                    <button class="btn deep-orange col s12">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
