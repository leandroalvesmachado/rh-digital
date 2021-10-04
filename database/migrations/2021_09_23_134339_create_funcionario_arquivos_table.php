<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_arquivos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onUpdate('cascade');
            $table->uuid('tipo_arquivo_id');
            $table->foreign('tipo_arquivo_id')->references('id')->on('tipo_arquivos')->onUpdate('cascade');
            $table->string('nome');
            $table->text('descricao');
            $table->text('observacao')->nullable();
            $table->text('arquivo');
            $table->text('arquivo_caminho');
            $table->text('content_type');
            $table->text('metadata');
            $table->bigInteger('byte_size')->comment('tamanho em bytes');
            $table->boolean('validado')->default(0);
            $table->boolean('ativo')->default(1);
            $table->uuid('created_by');
            $table->foreign('created_by')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->uuid('updated_by');
            $table->foreign('updated_by')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->uuid('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_arquivos');
    }
}
