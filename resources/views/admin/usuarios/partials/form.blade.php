<div class="row mb-3">
    <div class="col-md-6">
        <x-admin.label for="nome" class="form-label" name="Nome" required />
        {!!
            Form::text('nome', old('nome', isset($usuario) ? $usuario->nome : ''), [
                'id' => 'nome',
                'class' => 'form-control '.($errors->has('nome') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('nome')" />
    </div>
    <div class="col-md-6">
        <x-admin.label for="email" class="form-label" name="E-mail" required />
        {!!
            Form::text('email', old('email', isset($usuario) ? $usuario->email : ''), [
                'id' => 'email',
                'class' => 'form-control '.($errors->has('email') ? 'is-invalid' : '')
            ])
        !!}
        <x-admin.validation :message="$errors->first('email')" />
    </div>
</div>
