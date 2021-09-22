<div class="row mb-3">
    <div class="col-md-3">
        <x-funcionario.label for="cpf" class="form-label" name="CPF" required />
        {!!
            Form::text('cpf', null, [
                'id' => 'cpf',
                'class' => 'form-control cpf '.($errors->has('cpf') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('cpf')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="data_nascimento" class="form-label" name="Data Nascimento" required />
        {!!
            Form::text('data_nascimento', null, [
                'id' => 'data_nascimento',
                'class' => 'form-control date '.($errors->has('data_nascimento') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('data_nascimento')" />
    </div>
</div>

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
    <div class="col-md-6">
        <x-funcionario.label for="nome_mae" class="form-label" name="Nome da Mãe" required />
        {!!
            Form::text('nome_mae', null, [
                'id' => 'nome_mae',
                'class' => 'form-control '.($errors->has('nome_mae') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('nome_mae')" />
    </div>
</div>
