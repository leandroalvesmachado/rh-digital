<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Orgao;

class OrgaoRepository extends BaseRepository
{
    protected $model = Orgao::class;

    public function paginateWhere($paginate = 10, $orderBy, $sort = 'ASC', $columns = null)
    {
        try {
            $query = $this->model->query();

            if (count($columns) > 0) {
                if (isset($columns['nome'])) {
                    $query->where(function($query) use ($columns) {
                        $query->where('nome', 'like', '%'.mb_strtoupper($columns['nome']).'%');
                        $query->orWhere('nome', 'like', '%'.mb_strtolower($columns['nome']).'%');
                        $query->orWhere('nome', 'like', '%'.$columns['nome'].'%');
                    });
                }
            }

            return $query->orderBy($orderBy, $sort)->paginate($paginate);
        } catch (Exception $e) {
            return [];
        }
    }

    public function store($data)
    {
        try {
            $orgao = new $this->model($data);
            $orgao->save();

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Orgao $orgao, $data)
    {
        try {
            $orgao->fill($data);
            $orgao->save();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
