<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircrafts', function (Blueprint $table) {
            /*Config */
            $table->id();
            $table->string('marca')->nullable();
            $table->string('proprietario')->nullable();
            $table->string('outros_proprietarios')->nullable();
            $table->string('sg_uf', 20)->nullable();
            $table->string('cpf_cnpj')->nullable();
            $table->string('nm_operador')->nullable();
            $table->string('outros_operadores')->nullable();
            $table->string('uf_operador', 20)->nullable();
            $table->string('cpf_cgc')->nullable();
            $table->string('nr_cert_matricula')->nullable();
            $table->string('nr_serie')->nullable();
            $table->string('cd_categoria')->nullable();
            $table->string('cd_tipo')->nullable();
            $table->string('ds_modelo')->nullable();
            $table->string('nm_fabricante')->nullable();
            $table->string('cd_cls')->nullable();
            $table->string('nr_pmd', 20)->nullable();
            $table->string('cd_tipo_icao')->nullable();
            $table->integer('nr_tripulacao_min')->nullable();
            $table->integer('nr_passageiros_max')->nullable();
            $table->integer('nr_assentos')->nullable();
            $table->integer('nr_ano_fabricacao')->nullable();
            $table->string('dt_validade_cva')->nullable();
            $table->string('dt_validade_ca')->nullable();
            $table->date('dt_canc')->nullable();
            $table->string('ds_motivo_canc')->nullable();
            $table->string('cd_interdicao')->nullable();
            $table->string('cd_marca_nac1')->nullable();
            $table->string('cd_marca_nac2')->nullable();
            $table->string('cd_marca_nac3')->nullable();
            $table->string('cd_marca_estrangeira')->nullable();
            $table->string('ds_gravame')->nullable();
            $table->date('dt_matricula')->nullable();
            $table->timestamps();
            $table->string('updated_by', 50)->nullable();
            $table->string('created_by', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aircrafts');
    }
}
