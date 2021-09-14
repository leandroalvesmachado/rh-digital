<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Sexo;

class SexoRepository extends BaseRepository
{
    protected $model = Sexo::class;

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
