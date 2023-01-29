<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{


    public function getRouteKeyName()
    {
        return 'city_tag';
    } 

  
}
