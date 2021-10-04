<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Exception;
use DB;

use App\Models\Funcionario;
use App\Models\FuncionarioArquivo;
use App\Models\TipoArquivo;

class FuncionarioArquivoRepository extends BaseRepository
{
    protected $model = FuncionarioArquivo::class;

    public function paginateByTipoArquivo($paginate = 10, $orderBy, $funcionarioId, $tipoArquivoId, $sort = 'ASC')
    {
        try {
            $query = $this->model->query();
            $query->where('funcionario_id', $funcionarioId);
            $query->where('tipo_arquivo_id', $tipoArquivoId);

            return $query->orderBy('nome', $sort)->paginate($paginate);
        } catch (Exception $e) {
            return [];
        }
    }

    public function store(Funcionario $funcionario, TipoArquivo $tipoArquivo, $data)
    {
        try {
            $arquivo = $data['arquivo'];
            $arquivoExtensao = $arquivo->extension();
            $arquivoMimeType = $arquivo->getClientMimeType();
            $arquivoNome = Str::slug($data['nome']).'.'.$arquivoExtensao;
            $arquivoSize = $arquivo->getSize(); // bytes
            $arquivoMetaData = '$arquivo->getMetadata()';

            $funcionarioArquivo = new $this->model();

            $caminho = $arquivo->storeAs(
                $funcionario->id.'/'.$tipoArquivo->id.'/'.$funcionarioArquivo->id,
                $arquivoNome,
                'funcionarios'
            );

            $funcionarioArquivo->nome = $data['nome'];
            $funcionarioArquivo->descricao = $data['descricao'];
            $funcionarioArquivo->observacao = $data['observacao'];
            $funcionarioArquivo->arquivo = $arquivoNome;
            $funcionarioArquivo->arquivo_caminho = $caminho;
            $funcionarioArquivo->content_type = $arquivoMimeType;
            $funcionarioArquivo->metadata = $arquivoMimeType;
            $funcionarioArquivo->byte_size = $arquivoSize;
            $funcionarioArquivo->tipo_arquivo_id = $tipoArquivo->id;

            $funcionario->arquivos()->save($funcionarioArquivo);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(FuncionarioArquivo $funcionarioArquivo)
    {
        try {
            $funcionarioArquivo->delete();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
