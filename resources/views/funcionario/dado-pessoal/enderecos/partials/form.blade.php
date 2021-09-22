<div class="row mb-3">
    <div class="col-md-6">
        <x-funcionario.label for="nome" class="form-label" name="Nome" required />
        {!!
            Form::text('nome', null, [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('nome')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <x-funcionario.label for="cep" class="form-label" name="CEP" required />
        {!!
            Form::text('cep', null, [
                'id' => 'cep',
                'class' => 'form-control cep '.($errors->has('cep') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('cep')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="pais_id" class="form-label" name="País" required />
        {!!
            Form::select('pais_id', $paises, null, [
                'id' => 'pais_id',
                'class' => 'form-select '.($errors->has('pais_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('pais_id')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="estado_id" class="form-label" name="Estado" required />
        {!!
            Form::select('estado_id', $estados, null, [
                'id' => 'estado_id',
                'class' => 'form-select '.($errors->has('estado_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('estado_id')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="municipio_id" class="form-label" name="Município" required />
        {!!
            Form::select('municipio_id', $municipios, null, [
                'id' => 'municipio_id',
                'class' => 'form-select '.($errors->has('municipio_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('municipio_id')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <x-funcionario.label for="numero" class="form-label" name="Número" required />
        {!!
            Form::text('numero', null, [
                'id' => 'numero',
                'class' => 'form-control '.($errors->has('numero') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('numero')" />
    </div>
    <div class="col-md-4">
        <x-funcionario.label for="bairro" class="form-label" name="Bairro" required />
        {!!
            Form::text('bairro', null, [
                'id' => 'bairro',
                'class' => 'form-control '.($errors->has('bairro') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('bairro')" />
    </div>
    <div class="col-md-5">
        <x-funcionario.label for="logradouro" class="form-label" name="Logradouro" required />
        {!!
            Form::text('logradouro', null, [
                'id' => 'logradouro',
                'class' => 'form-control '.($errors->has('logradouro') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('logradouro')" />
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <x-funcionario.label for="complemento" class="form-label" name="Complemento" />
        {!!
            Form::text('complemento', null, [
                'id' => 'complemento',
                'class' => 'form-control '.($errors->has('complemento') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('complemento')" />
    </div>
    <div class="col-md-6">
        <x-funcionario.label for="ponto_referencia" class="form-label" name="Ponto de Referência" />
        {!!
            Form::text('ponto_referencia', null, [
                'id' => 'ponto_referencia',
                'class' => 'form-control '.($errors->has('ponto_referencia') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('ponto_referencia')" />
    </div>
</div>
