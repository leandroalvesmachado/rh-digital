<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\TipoArquivo;

class TipoArquivoRepository extends BaseRepository
{
    protected $model = TipoArquivo::class;

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

    public function findAll()
    {
        try {
            return $this->model
                ->all()
                ->sortBy('nome');
        } catch (Exception $e) {
            return [];
        }
    }
}
