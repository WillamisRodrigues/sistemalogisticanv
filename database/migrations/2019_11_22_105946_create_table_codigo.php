<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodigo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_codigo', function (Blueprint $table) {
            $table->bigIncrements('idCod');
            $table->bigInteger('codUnidade');
            $table->bigInteger('nivel');
            $table->bigInteger('status');
            $table->bigInteger('matricula');
            $table->string('unidade');
            $table->string('curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_codigo');
    }
}
