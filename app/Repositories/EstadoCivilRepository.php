<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\EstadoCivil;

class EstadoCivilRepository extends BaseRepository
{
    protected $model = EstadoCivil::class;

    public function selectOption()
    {
        try {
            return $this->model
                ->all()
                ->sortBy('nome')
                ->pluck('nome', 'id')
                ->prepend('Escolha a opção', '');
        } catch (Exception $e) {
            return [
                '' => $e->getMessage()
            ];
        }
    }
}
