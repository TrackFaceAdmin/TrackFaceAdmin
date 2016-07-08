<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menu';
    protected $fillable = ['seccion', 'sub_seccion', 'seccion_sub_id', 'class', 'titulo', 'orden', 'url', 'nivel'];
    public $timestamps = false;

    public static function getMenu($tipo_usuario){
      $perfil = \App\Perfil::where('perfil', $tipo_usuario);

      $varAcceso = $perfil[0]->acceso_menu;
      //$varAcceso = implode("','", explode(',', $perfil[0]->acceso_menu));

      //$menus = \App\Menu::whereIn('sub_seccion', [$varAcceso])->get();

      return $varAcceso;
    }
}
