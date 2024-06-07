<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airfields', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('headquarter')->nullable();
            $table->string('typeUse')->nullable();
            $table->string('codigoOaci')->nullable();
            $table->string('ciad')->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('cityServed')->nullable();
            $table->string('state')->nullable();
            $table->string('stateServed')->nullable();

            $table->string('altitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->decimal('latGeoPoint', $precision = 10, $scale = 8)->nullable();
            $table->decimal('lonGeoPoint', $precision = 11, $scale = 8)->nullable();

            $table->decimal('length', $precision = 10, $scale = 4)->nullable();
            $table->decimal('length2', $precision = 10, $scale = 4)->nullable();
            $table->decimal('width', $precision = 10, $scale = 4)->nullable();
            $table->decimal('width2', $precision = 10, $scale = 4)->nullable();

            $table->string('surface')->nullable();
            $table->string('surface2')->nullable();
            $table->string('designation')->nullable();
            $table->string('designation2')->nullable();
            $table->string('resistence')->nullable();
            $table->string('resistence2')->nullable();
            $table->string('operationDay')->nullable();
            $table->string('operationNight')->nullable();

            $table->string('ordinanceRegistration')->nullable();
            $table->mediumText('ordinanceLink')->nullable();
            $table->date('registrationValidity')->nullable();
            $table->string('status')->nullable();

            /*Padrão */
            $table->timestamps();
            $table->string('updated_by',50)->nullable();
            $table->string('created_by',50)->nullable();
            /*Alteração */
            $table->text('updated_because')->nullable();
            /*Excluido */
            $table->date('deleted_at')->nullable();
            $table->text('deleted_because')->nullable();
            $table->string('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airfields');
    }
}
