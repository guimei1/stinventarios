@extends('layout.site')

@section('titulo','ST Inventário')

@section('conteudo')
    <div class="container">
        <div class="row">
            <h4>Inventário #{{ $inventario->id }}</h4>
            <label>{{ date_format($inventario->created_at, 'd-m-Y') }}</label>
        </div>
        <div class="row">
            <hr>
        </div>

        <div class="row">
            <h5>Loja</h5>
        </div>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <td><center>#ID</center></td>
                        <td><center>Razão Social</center></td>
                        <td><center>Nome Fantasia</center></td>
                        <td><center>CNPJ</center></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><center>{{ $inventario->loja_id }}</center></td>
                        <td><center>{{ $inventario->loja->corporate_name }}</center></td>
                        <td><center>{{ $inventario->loja->fantasy_name }}</center></td>
                        <td><center>{{ $inventario->loja->cpf_cnpj }}</center></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <hr>
        </div>

        <div class="row">
            <h5>Arquivos</h5>
        </div>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <td>ID do Arquivo</td>
                        <td>Nome do Arquivo</td>
                        <td>Quantidade de Linhas</td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($inventario->arquivo_contagem))
                        <tr>
                            <td>{{ $inventario->arquivo_contagem->id }}</td>
                            <td>{{ $inventario->arquivo_contagem->nome_arquivo }}</td>
                            <td>{{ $inventario->arquivo_contagem->quantidade_linhas }}</td>
                        </tr>
                    @endif
                    @if (isset($inventario->arquivo_inventario))
                        <tr>
                            <td>{{ $inventario->arquivo_inventario->id }}</td>
                            <td>{{ $inventario->arquivo_inventario->nome_arquivo }}</td>
                            <td>{{ $inventario->arquivo_inventario->quantidade_linhas }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col s3">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="col s3">
                <input type="file" name="file" class="form-control">
            </div>
        </div>




    </div>
@endsection
