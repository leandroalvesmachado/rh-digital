<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_enderecos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onUpdate('cascade');
            $table->string('cep', 8);
            $table->uuid('pais_id');
            $table->foreign('pais_id')->references('id')->on('paises')->onUpdate('cascade');
            $table->uuid('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados')->onUpdate('cascade');
            $table->uuid('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onUpdate('cascade');
            $table->string('bairro');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('ponto_referencia')->nullable();
            $table->boolean('preferencial')->default(0);
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
        Schema::dropIfExists('funcionario_enderecos');
    }
}
