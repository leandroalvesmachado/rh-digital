<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Funcionario;
use App\Models\FuncionarioEndereco;

class FuncionarioEnderecoRepository extends BaseRepository
{
    protected $model = FuncionarioEndereco::class;

    public function store(Funcionario $funcionario, $data)
    {
        try {
            $funcionarioEndereco = new $this->model($data);
            $funcionario->enderecos()->save($funcionarioEndereco);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(FuncionarioEndereco $funcionarioEndereco)
    {
        try {
            $funcionarioEndereco->delete();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
