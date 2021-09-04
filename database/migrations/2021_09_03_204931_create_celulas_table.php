<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celulas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('setor_id');
            $table->foreign('setor_id')->references('id')->on('setores')->onUpdate('cascade');
            $table->string('nome');
            $table->string('slug');
            $table->string('descricao')->nullable();
            $table->string('sigla')->nullable();
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
        Schema::dropIfExists('celulas');
    }
}
