<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perfil', 250);
            $table->longtext('acceso_menu');
            $table->longtext('acceso_seccion');
            $table->longtext('acceso_form');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('perfil');
    }

}
