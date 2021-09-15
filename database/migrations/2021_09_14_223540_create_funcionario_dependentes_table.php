<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioDependentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_dependentes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onUpdate('cascade');
            $table->string('cpf', 11)->unique();
            $table->dateTime('data_nascimento');
            $table->string('nome');
            $table->string('nome_mae');
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
        Schema::dropIfExists('funcionario_dependentes');
    }
}
