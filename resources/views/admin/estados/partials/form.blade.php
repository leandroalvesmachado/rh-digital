<div class="row mb-3">
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        {!!
            Form::text('nome', old('nome', isset($estado) ? $estado->nome : ''), [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('nome')" />
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <label for="sigla" class="form-label">Sigla</label>
        {!!
            Form::text('sigla', old('sigla', isset($estado) ? $estado->sigla : ''), [
                'id' => 'sigla',
                'class' => 'form-control '.($errors->has('sigla') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('sigla')" />
    </div>
    <div class="col-md-3">
        <label for="codigo_ibge" class="form-label">Código IBGE</label>
        {!!
            Form::text('codigo_ibge', old('codigo_ibge', isset($estado) ? $estado->codigo_ibge : ''), [
                'id' => 'codigo_ibge',
                'class' => 'form-control '.($errors->has('codigo_ibge') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('codigo_ibge')" />
    </div>
</div>
