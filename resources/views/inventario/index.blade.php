@extends('layout.site')

@section('titulo','ST Inventário')

@section('conteudo')
    <div class="container">
        <h3 class="center">Inventários</h3>
            <div class="row">
                <div class="col s12">
                    <hr>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Loja</th>
                        <th>Data Inventário</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventarios as $inventario)
                        <tr>
                            <td>{{ $inventario->id }}</td>
                            <td>{{ $inventario->loja->fantasy_name }}</td>
                            <td>{{ $inventario->created_at }}</td>
                            <td>
                                <a class="waves-effect waves-light btn-small btn" href="{{ route('st.loja.editar', $inventario->id) }}">Editar</a>
                                <a class="waves-effect waves-light btn-small btn red" href="{{ route('st.loja.deletar', $inventario->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        <div class="row">
            <div class="col s12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <a class="btn blue col s12" href="{{ route('st.inventario.adicionar.loja', request()->route('id')) }}">Novo Inventario</a>
            </div>
        </div>
    </div>
@endsection
