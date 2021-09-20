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
    <div class="col-md-3">
        <x-funcionario.label for="telefone_residencial" class="form-label" name="Telefone Residencial" />
        {!!
            Form::text('telefone_residencial', null, [
                'id' => 'telefone_residencial',
                'class' => 'form-control phone_with_ddd '.($errors->has('telefone_residencial') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('telefone_residencial')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="telefone_celular" class="form-label" name="Celular" />
        {!!
            Form::text('telefone_celular', null, [
                'id' => 'telefone_celular',
                'class' => 'form-control phone_with_ddd '.($errors->has('telefone_celular') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('telefone_celular')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <x-funcionario.label for="email_principal" class="form-label" name="E-mail Principal" />
        {!!
            Form::text('email_principal', null, [
                'id' => 'email_principal',
                'class' => 'form-control '.($errors->has('email_principal') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('email_principal')" />
    </div>
    <div class="col-md-6">
        <x-funcionario.label for="email_alternativo" class="form-label" name="E-mail Alternativo" />
        {!!
            Form::text('email_alternativo', null, [
                'id' => 'email_alternativo',
                'class' => 'form-control '.($errors->has('email_alternativo') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('email_alternativo')" />
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <x-funcionario.label for="grau_parentesco" class="form-label" name="Grau de Parentesco" />
        {!!
            Form::text('grau_parentesco', null, [
                'id' => 'grau_parentesco',
                'class' => 'form-control '.($errors->has('grau_parentesco') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('grau_parentesco')" />
    </div>
</div>

