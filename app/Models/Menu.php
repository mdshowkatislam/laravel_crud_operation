<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function permission()
    {
      // dd('hi');
       return  $this->hasMany(MenuPermision::class);
    }
    public function menu_routes()
    {
       return  $this->hasMany(MenuPermision::class);
    }
}
