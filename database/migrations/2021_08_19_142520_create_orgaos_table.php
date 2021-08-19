<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgaos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados')->onUpdate('cascade');
            $table->uuid('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onUpdate('cascade');
            $table->string('nome');
            $table->string('slug');
            $table->string('sigla');
            $table->string('cep', 8);
            $table->string('endereco');
            $table->string('telefone', 11)->nullable();
            $table->string('numero')->nullable();
            $table->string('site')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('orgaos');
    }
}
