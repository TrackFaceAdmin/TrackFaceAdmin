<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    //
    protected $table = 'menu';
    protected $fillable = ['seccion', 'sub_seccion', 'seccion_sub_id', 'class', 'titulo', 'orden', 'url', 'nivel'];
    public $timestamps = false;

    public static function getMenus($tipo_usuario) {
        $perfil = \App\Perfil::where('perfil', $tipo_usuario)->get();
        $sub_seccion = explode(',', $perfil[0]->acceso_menu);
        $sub = [];
        foreach ($sub_seccion as $seccion) {
            $sub[] = $seccion;
        }
        $menu = \App\Menu::whereIn('sub_seccion', $sub)->get();
        return $menu;
    }

}
