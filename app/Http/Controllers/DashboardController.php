<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = \Illuminate\Support\Facades\Auth::user();
<<<<<<< HEAD
        $menu = \App\Menu::getMenu($user->tipo);
        
        print_r( $menu[0]['titulo']);
        print_r( $menu[0]['class']);
        return view('admin.dashboard', compact('user'));
=======
        
        
        
        $perfil = \App\Perfil::where('perfil', $user->tipo)->get();
        $menus = \App\Menu::whereIn('sub_seccion',[$perfil->acceso_menu])->get();

        return view('admin.dashboard', compact('user', 'perfil', 'menus'));
>>>>>>> e1b835d3cc69de0a85dbf2acf083602648e5e282
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
