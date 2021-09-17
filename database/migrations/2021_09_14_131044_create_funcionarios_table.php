<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->string('cpf', 11)->unique();
            $table->dateTime('data_nascimento');
            $table->uuid('pais_nascimento_id');
            $table->foreign('pais_nascimento_id')->references('id')->on('paises')->onUpdate('cascade');
            $table->uuid('estado_nascimento_id');
            $table->foreign('estado_nascimento_id')->references('id')->on('estados')->onUpdate('cascade');
            $table->uuid('naturalidade_id');
            $table->foreign('naturalidade_id')->references('id')->on('municipios')->onUpdate('cascade');
            $table->uuid('nacionalidade_id');
            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidades')->onUpdate('cascade');
            $table->uuid('sexo_id');
            $table->foreign('sexo_id')->references('id')->on('sexos')->onUpdate('cascade');
            $table->uuid('estado_civil_id');
            $table->foreign('estado_civil_id')->references('id')->on('estados_civis')->onUpdate('cascade');
            $table->string('nome');
            $table->string('nome_mae');
            $table->string('nome_pai')->nullable();
            $table->enum('pcd', ['SIM', 'NAO'])->comment('pessoa com deficiência');
            $table->text('pcd_observacao')->nullable();
            $table->string('email_institucional')->unique();
            $table->string('email_particular')->nullable();
            $table->string('telefone_residencial', 11)->nullable();
            $table->string('telefone_celular', 11)->nullable();
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
        Schema::dropIfExists('funcionarios');
    }
}
