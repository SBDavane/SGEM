<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPacienteIdToExame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exames', function (Blueprint $table) {
            $table->integer('paciente_id')->unsigned()->after('categoria_id');

            $table->foreign('paciente_id')->references('id')->on('pacientes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exames', function (Blueprint $table) {
            //
        });
    }
}
