<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

    protected $table = "perfil";
    protected $fillable = ['perfil', 'acceso_menu', 'acceso_seccion', 'acceso_form'];
    public $timestamps = false;
}
