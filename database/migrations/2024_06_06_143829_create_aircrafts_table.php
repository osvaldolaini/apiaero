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
            $table->string('slug')->nullable();
            $table->boolean('active')->nullable();
            /*End Config */
            /*Custom */
            $table->string('group')->nullable();
            $table->string('type')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('prefix')->nullable();
            $table->string('code_icao')->nullable();
            $table->boolean('tug')->nullable();
            $table->boolean('widescreen')->nullable();
            $table->boolean('simulator')->nullable();
            $table->integer('seat')->nullable();
            $table->integer('crew')->nullable();
            $table->string('serial')->nullable();
            $table->integer('since')->nullable();
            $table->string('owner')->nullable();
            $table->string('operator')->nullable();
            $table->integer('weight')->nullable();

            /*End Custom */
            /*Log */
            $table->timestamps();
            $table->string('updated_by',50)->nullable();
            $table->string('created_by',50)->nullable();
            /*Alteração */
            $table->text('updated_because')->nullable();
            /*Excluido */
            $table->date('deleted_at')->nullable();
            $table->text('deleted_because')->nullable();
            $table->string('deleted_by')->nullable();
            /*End Log */

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
