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
    </div>
    <div class="col-md-3">
        <x-funcionario.label for="telefone_celular" class="form-label" name="Celular" />
        {!!
            Form::text('telefone_celular', null, [
                'id' => 'telefone_celular',
                'class' => 'form-control phone_with_ddd '.($errors->has('telefone_celular') ? 'is-invalid' : '')
            ])
        !!}
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

<!-- $table->uuid('id')->primary();
            $table->uuid('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onUpdate('cascade');
            $table->string('nome');
            $table->string('grau_parentesco')->nullable();
            $table->string('telefone_residencial', 10)->nullable();
            $table->string('telefone_celular', 11);
            $table->string('email_principal')->nullable();
            $table->string('email_alternativo')->nullable();
            $table->boolean('preferencial')->default(0);
            $table->boolean('ativo')->default(1);
            $table->uuid('created_by');
            $table->foreign('created_by')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->uuid('updated_by');
            $table->foreign('updated_by')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->uuid('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes(); -->
