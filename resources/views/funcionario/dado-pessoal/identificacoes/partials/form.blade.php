<div class="row mb-3">
    <div class="col-md-3">
        <x-funcionario.label for="cpf" class="form-label" name="CPF" required />
        {!!
            Form::text('cpf', old('cpf', isset($funcionario) ? $funcionario->cpf : ''), [
                'id' => 'cpf',
                'class' => 'form-control cpf '.($errors->has('cpf') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('cpf')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="data_nascimento" class="form-label" name="Data de Nascimento" required />
        {!!
            Form::text('data_nascimento', old('data_nascimento', isset($funcionario) ? $funcionario->data_nascimento : ''), [
                'id' => 'data_nascimento',
                'class' => 'form-control date '.($errors->has('data_nascimento') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('data_nascimento')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="pais_nascimento_id" class="form-label" name="País de Nascimento" required />
        {!!
            Form::select('pais_nascimento_id', $paises, old('pais_nascimento_id', isset($funcionario) ? $funcionario->pais_nascimento_id : ''), [
                'id' => 'pais_nascimento_id',
                'class' => 'form-select '.($errors->has('pais_nascimento_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('pais_nascimento_id')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="estado_nascimento_id" class="form-label" name="Estado de Nascimento" required />
        {!!
            Form::select('estado_nascimento_id', $estados, old('estado_nascimento_id', isset($funcionario) ? $funcionario->estado_nascimento_id : ''), [
                'id' => 'estado_nascimento_id',
                'class' => 'form-select '.($errors->has('estado_nascimento_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('estado_nascimento_id')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <x-funcionario.label for="naturalidade_id" class="form-label" name="Naturalidade" required />
        {!!
            Form::select('naturalidade_id', $municipios, old('naturalidade_id', isset($funcionario) ? $funcionario->naturalidade_id : ''), [
                'id' => 'naturalidade_id',
                'class' => 'form-select '.($errors->has('naturalidade_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('naturalidade_id')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="nacionalidade_id" class="form-label" name="Nacionalidade" required />
        {!!
            Form::select('nacionalidade_id', $nacionalidades, old('nacionalidade_id', isset($funcionario) ? $funcionario->nacionalidade_id : ''), [
                'id' => 'nacionalidade_id',
                'class' => 'form-select '.($errors->has('nacionalidade_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('nacionalidade_id')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="sexo_id" class="form-label" name="Sexo" required />
        {!!
            Form::select('sexo_id', $sexos, old('sexo_id', isset($funcionario) ? $funcionario->sexo_id : ''), [
                'id' => 'sexo_id',
                'class' => 'form-select '.($errors->has('sexo_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('sexo_id')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="estado_civil_id" class="form-label" name="Estado Civil" required />
        {!!
            Form::select('estado_civil_id', $estadosCivis, old('estado_civil_id', isset($funcionario) ? $funcionario->estado_civil_id : ''), [
                'id' => 'estado_civil_id',
                'class' => 'form-select '.($errors->has('estado_civil_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('estado_civil_id')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <x-funcionario.label for="nome" class="form-label" name="Nome" required />
        {!!
            Form::text('nome', old('nome', isset($funcionario) ? $funcionario->nome : ''), [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('nome')" />
    </div>
    <div class="col-md-6">
        <x-funcionario.label for="nome_mae" class="form-label" name="Nome da Mãe" required />
        {!!
            Form::text('nome_mae', old('nome_mae', isset($funcionario) ? $funcionario->nome_mae : ''), [
                'id' => 'nome_mae',
                'class' => 'form-control '.($errors->has('nome_mae') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('nome_mae')" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <x-funcionario.label for="nome_pai" class="form-label" name="Nome do Pai" />
        {!!
            Form::text('nome_pai', old('nome_pai', isset($funcionario) ? $funcionario->nome_pai : ''), [
                'id' => 'nome_pai',
                'class' => 'form-control '.($errors->has('nome_pai') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('nome_pai')" />
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="telefone_residencial" class="form-label" name="Telefone Residencial" />
        {!!
            Form::text('telefone_residencial', old('telefone_residencial', isset($funcionario) ? $funcionario->telefone_residencial : ''), [
                'id' => 'telefone_residencial',
                'class' => 'form-control phone_with_ddd '.($errors->has('telefone_residencial') ? 'is-invalid' : '')
            ])
        !!}
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="telefone_celular" class="form-label" name="Celular" />
        {!!
            Form::text('telefone_celular', old('telefone_celular', isset($funcionario) ? $funcionario->telefone_celular : ''), [
                'id' => 'telefone_celular',
                'class' => 'form-control phone_with_ddd '.($errors->has('telefone_celular') ? 'is-invalid' : '')
            ])
        !!}
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <x-funcionario.label for="email_institucional" class="form-label" name="E-mail Institucional" required />
        {!!
            Form::text('email_institucional', old('email_institucional', isset($funcionario) ? $funcionario->email_institucional : ''), [
                'id' => 'email_institucional',
                'class' => 'form-control '.($errors->has('email_institucional') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('email_institucional')" />
    </div>
    <div class="col-md-6">
        <x-funcionario.label for="email_particular" class="form-label" name="E-mail Particular" />
        {!!
            Form::text('email_particular', old('email_particular', isset($funcionario) ? $funcionario->email_particular : ''), [
                'id' => 'email_particular',
                'class' => 'form-control '.($errors->has('email_particular') ? 'is-invalid' : '')
            ])
        !!}
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <x-funcionario.label for="pcd" class="form-label" name="PCD" required />
        {!!
            Form::select('pcd', $pcds, old('pcd', isset($funcionario) ? $funcionario->pcd : ''), [
                'id' => 'pcd',
                'class' => 'form-select '.($errors->has('pcd') ? 'is-invalid' : '')
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('pcd')" />
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <x-funcionario.label for="pcd_observacao" class="form-label" name="Observação PCD" />
        {!!
            Form::textarea('pcd_observacao', old('pcd_observacao', isset($funcionario) ? $funcionario->pcd_observacao : ''), [
                'id' => 'pcd_observacao',
                'class' => 'form-control '.($errors->has('pcd_observacao') ? 'is-invalid' : ''),
                'rows' => '3'
            ])
        !!}
        <x-funcionario.validation :message="$errors->first('pcd_observacao')" />
    </div>
</div>

