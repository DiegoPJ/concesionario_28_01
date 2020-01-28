<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Coche;
class Marca extends Model
{
    protected $fillable = ['nombre','logo','pais'];
    //vamos con las constrain relaciones 1:N es decir de una marca
    //tendremos muchos coches, en marcas
    public function coches(){
        return $this->hasMany(Coche::class);
    }
}
