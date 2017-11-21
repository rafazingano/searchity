<?php

namespace App;

use DB;
use Request;
use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{
    protected $table = 'Cursos';

      public function Entidades()
      {
          return $this->belongsTo('App\Entidades');
          //return $this->belongsTo(Entidades::class);
      }

public function turno(){

    return $this->hasOne('App\Turno');
}

    public function segmento(){

        return $this->hasOne('App\segmento');
    }

}