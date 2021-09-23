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
    <div class="col-md-12">
        <x-funcionario.label for="descricao" class="form-label" name="Descrição" required />
        {!!
            Form::textarea('descricao', null, [
                'id' => 'descricao',
                'class' => 'form-control '.($errors->has('descricao') ? 'is-invalid' : ''),
                'rows' => 2
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('descricao')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <x-funcionario.label for="observacao" class="form-label" name="Observação" />
        {!!
            Form::textarea('observacao', null, [
                'id' => 'observacao',
                'class' => 'form-control '.($errors->has('observacao') ? 'is-invalid' : ''),
                'rows' => 3
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('observacao')" />
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <x-funcionario.label for="arquivo" class="form-label" name="Arquivo" required />
        {!!
            Form::file('arquivo', [
                'id' => 'arquivo',
                'class' => 'form-control '.($errors->has('arquivo') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('arquivo')" />
    </div>
</div>
