@extends('layout.site')

@section('titulo','Redes')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Redes</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($redes as $rede)
                        <tr>
                            <td>{{ $rede->id }}</td>
                            <td>{{ $rede->name }}</td>
                            <td>
                                <a class="btn red" href="{{ route('st.rede.editar') }}">Editar</a>
                                <a class="btn red" href="{{ route('st.rede.deletar',$rede->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col s12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <a class="btn blue col s12" href="{{ route('st.rede.adicionar') }}">Adicionar</a>
            </div>
        </div>
    </div>
@endsection
