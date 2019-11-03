<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocalIdToExame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exames', function (Blueprint $table) {
            $table->integer('local_id')->unsigned()->after('categoria_id');

            $table->foreign('local_id')->references('id')->on('locais');

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
