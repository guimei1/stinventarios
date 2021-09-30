@extends('layout.site')

@section('titulo','Redes')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Rede</h3>
        <div class="row">
            <form class="" action="{{route('st.rede.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('rede._form')
                <div class="col s12">
                    <button class="btn deep-orange col s12">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
