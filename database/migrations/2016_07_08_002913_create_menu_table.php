<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('seccion', 50);
            $table->string('sub_seccion', 50);
            $table->integer('seccion_sub_id');
            $table->string('class', 50);
            $table->string('titulo', 50);
            $table->integer('orden');
            $table->string('url', 50);
            $table->string('nivel', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu');
    }
}
