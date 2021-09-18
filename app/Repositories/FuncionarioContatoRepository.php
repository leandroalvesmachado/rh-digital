<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Funcionario;
use App\Models\FuncionarioContato;

class FuncionarioContatoRepository extends BaseRepository
{
    protected $model = FuncionarioContato::class;

    public function store(Funcionario $funcionario, $data)
    {
        try {
            $funcionarioContato = new $this->model($data);
            $funcionario->contatos()->save($funcionarioContato);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Funcionario $funcionario, FuncionarioContato $funcionarioContato, $data)
    {
        try {
            $funcionario->fill($data);
            $funcionario->save();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
