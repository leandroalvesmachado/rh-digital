<div class="row">
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        {!!
            Form::text('nome', null, [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <div class="invalid-feedback fs-6 text">
            {{ $errors->first('nome') }}
        </div>
    </div>
    <div class="col-md-4">
        <label for="sigla" class="form-label">Sigla</label>
        {!!
            Form::text('sigla', request()->get('sigla'), [
                'id' => 'sigla',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <div class="invalid-feedback fs-6 text">
            {{ $errors->first('sigla') }}
        </div>
    </div>
</div>
