<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Nacionalidade;

class NacionalidadeRepository extends BaseRepository
{
    protected $model = Nacionalidade::class;

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
