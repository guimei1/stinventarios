 <div class="row">
    <div class="input-field col s4">
        <label>Razão Social</label>
        <input type="text" name="corporate_name" value="{{isset($loja->corporate_name) ? $loja->corporate_name : ''}}">
    </div>

    <div class="input-field col s4">
        <label>Nome Fantasia</label>
        <input type="text" name="fantasy_name" value="{{isset($loja->fantasy_name) ? $loja->fantasy_name : ''}}">
    </div>

    <div class="input-field col s4">
        <label>CNPJ</label>
        <input type="text" name="cpf_cnpj" value="{{isset($loja->cpf_cnpj) ? $loja->cpf_cnpj : ''}}">
    </div>
</div>

<div class="row">
    @if (isset($redes))
        <div class="input-field col s6">
            <select name="rede_id">
                <option value="0" disabled selected>Selecione a Rede</option>
                @foreach ($redes as $rede)
                    <option value="{{ $rede->id }}">{{ $rede->name }}</option>
                @endforeach
            </select>
            <label>Rede</label>
        </div>
    @endif
</div>

