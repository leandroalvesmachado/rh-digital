<div class="row mb-3">
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        {!!
            Form::text('nome', old('nome', isset($cargo) ? $cargo->nome : ''), [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('nome')" />
    </div>
    <div class="col-md-6">
        <label for="carga_horaria" class="form-label">Carga Horária</label>
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
        <label for="descricao" class="form-label">Descrição</label>
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
