@extends('layout.site')

@section('titulo','Lojas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Lojas</h3>
            <div class="row">
                <div class="col s12">
                    <hr>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>CNPJ</th>
                        <th>Rede</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lojas as $loja)
                        <tr>
                            <td>{{ $loja->id }}</td>
                            <td>{{ $loja->corporate_name }}</td>
                            <td>{{ $loja->fantasy_name }}</td>
                            <td>{{ $loja->cpf_cnpj }}</td>
                            <td>{{ $loja->rede->name }}</td>
                            <td>
                                <a class="waves-effect waves-light btn-small btn"href="{{ route('st.inventario.lista.loja', $loja->id) }}">Inventários</a>
                                <a class="waves-effect waves-light btn-small btn" href="{{ route('st.loja.editar', $loja->id) }}">Editar</a>
                                <a class="waves-effect waves-light btn-small btn red" href="{{ route('st.loja.deletar', $loja->id) }}">Deletar</a>
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
                <a class="btn blue col s12" href="{{ route('st.loja.adicionar') }}">Adicionar</a>
            </div>
        </div>
    </div>
@endsection
