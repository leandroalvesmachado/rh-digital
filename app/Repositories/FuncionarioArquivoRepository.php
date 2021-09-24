<?php

namespace App\Repositories;

use Illuminate\Support\Str;

use Exception;
use DB;

use App\Models\Funcionario;
use App\Models\FuncionarioArquivo;
use App\Models\TipoArquivo;

class FuncionarioArquivoRepository extends BaseRepository
{
    protected $model = FuncionarioArquivo::class;

    public function store(Funcionario $funcionario, TipoArquivo $tipoArquivo, $data)
    {
        $arquivo = $data['arquivo'];
        $arquivoExtensao = $arquivo->extension();
        $arquivoMimeType = $arquivo->getClientMimeType();
        $arquivoNome = Str::slug($data['nome']).'.'.$arquivoExtensao;
        $arquivoSize = $arquivo->getSize(); // bytes
        $arquivoMetaData = '$arquivo->getMetadata()';

        echo"<pre>";
        print_r($arquivo);

        echo $arquivoExtensao;
        echo"<br>";
        echo $arquivoMimeType;
        echo"<br>";
        echo $arquivoNome;
        echo"<br>";
        echo $arquivoSize;
        echo"<br>";
        echo $arquivoMetaData;

        $funcionarioArquivo = new $this->model();
        $funcionarioArquivo->nome = $arquivoNome;
        $funcionarioArquivo->descricao = $data['descricao'];
        $funcionarioArquivo->observacao = $data['observacao'];
        $funcionarioArquivo->arquivo = $arquivoNome;
        $funcionarioArquivo->arquivo_caminho = '';
        $funcionarioArquivo->content_type = $arquivoMimeType;
        $funcionarioArquivo->metadata = $arquivoMimeType;
        $funcionarioArquivo->byte_size = $arquivoSize;

        dd($arquivo);
        try {
            $funcionarioArquivo = new $this->model();
            $funcionarioArquivo->nome = $data['nome'];

            // Str::slug($value)
            // $funcionario->contatos()->save($funcionarioContato);

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
