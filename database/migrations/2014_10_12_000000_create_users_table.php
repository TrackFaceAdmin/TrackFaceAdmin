<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('razon_sicial', 100);
            $table->string('rfc', 13)->unique();
            $table->string('calle', 100);
            $table->string('colonia', 100);
            $table->string('ciudad', 50);
            $table->string('estado', 50);
            $table->string('telefono', 20);
            $table->string('movil', 20);
            $table->enum('tipo', ['member', 'admin'])->default('member');
            $table->string('logo_empresa');
            $table->boolean('activo');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
