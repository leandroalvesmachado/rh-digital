<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Funcionario;
use App\Models\FuncionarioDependente;

class FuncionarioDependenteRepository extends BaseRepository
{
    protected $model = FuncionarioDependente::class;

    public function store(Funcionario $funcionario, $data)
    {
        try {
            $funcionarioDependente = new $this->model($data);
            $funcionario->contatos()->save($funcionarioDependente);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(FuncionarioDependente $funcionarioDependente)
    {
        try {
            $funcionarioDependente->delete();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
