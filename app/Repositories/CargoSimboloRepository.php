<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\CargoSimbolo;

class CargoSimboloRepository extends BaseRepository
{
    protected $model = CargoSimbolo::class;

    public function selectOption()
    {
        try {
            return $this->model
                ->all()
                ->sortBy('nome')
                ->map(function ($cargoSimbolo) {
                    $cargoSimbolo->descricao = $cargoSimbolo->sigla.' ('.$cargoSimbolo->nome.')';

                    return $cargoSimbolo;
                })
                ->pluck('descricao', 'id')
                ->prepend('Escolha a opção', '');
        } catch (Exception $e) {
            return [
                '' => $e->getMessage()
            ];
        }
    }
}
