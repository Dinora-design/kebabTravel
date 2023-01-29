<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class UserController extends Controller
{
    public function home(){
        $menus = Menu::get();
        return view('welcome')->with(compact('menus'));
    }
    
    public function item(Menu $menu){
        return view('User/city_item')->with(compact('menu'));
    }
}
