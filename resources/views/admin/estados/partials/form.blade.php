<div class="row">
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome</label>
        {!!
            Form::text('nome', null, [
                'id' => 'nome',
                'class' => 'form-control'
            ])
        !!}
    </div>
    <div class="col-md-4">
        <label for="sigla" class="form-label">Sigla</label>
        {!!
            Form::text('sigla', request()->get('sigla'), [
                'id' => 'sigla',
                'class' => 'form-control'
            ])
        !!}
    </div>
</div>
