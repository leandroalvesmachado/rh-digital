<div class="row mb-3">
    <div class="col-md-6">
        <x-admin.label for="nome" class="form-label" name="Nome" required />
        {!!
            Form::text('nome', old('nome', isset($cargo) ? $cargo->nome : ''), [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('nome')" />
    </div>
    <div class="col-md-6">
        <x-admin.label for="cargo_simbolo_id" class="form-label" name="Símbolo" required />
        {!!
            Form::select('cargo_simbolo_id', $simbolos, old('nome', isset($cargo) ? $cargo->cargo_simbolo_id : ''), [
                'id' => 'cargo_simbolo_id',
                'class' => 'form-select '.($errors->has('cargo_simbolo_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('cargo_simbolo_id')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <x-admin.label for="carga_horaria" class="form-label" name="Carga Horária" />
        {!!
            Form::text('carga_horaria', old('carga_horaria', isset($cargo) ? $cargo->carga_horaria : ''), [
                'id' => 'carga_horaria',
                'class' => 'form-control workload '.($errors->has('carga_horaria') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('carga_horaria')" />
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <x-admin.label for="descricao" class="form-label" name="Descrição" required />
        {!!
            Form::textarea('descricao', old('descricao', isset($cargo) ? $cargo->descricao : ''), [
                'id' => 'descricao',
                'class' => 'form-control '.($errors->has('descricao') ? 'is-invalid' : ''),
                'rows' => 3
            ])
        !!}
        <x-admin.validation :message="$errors->first('descricao')" />
    </div>
</div>
