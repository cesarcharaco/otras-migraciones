<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemuneracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remuneracion', function (Blueprint $table) {
            $table->increments('id');
            $table->double('sueldo_1era_quincena', 10,2);
            $table->double('sueldo_2da_quincena', 10,2);
            $table->double('sueldo_mens', 10,2);
            $table->double('iess_patronal', 10,2);
            $table->double('iess_personal', 10,2);
            $table->double('descuento_iess', 10,2);
            $table->double('bono_responsabilidad', 10,2);
            $table->string('horas_extras', 2);
            $table->bigInteger('cuenta_bancaria')->unique();
            $table->string('devolver_fondos', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('remuneracion');
    }
}
