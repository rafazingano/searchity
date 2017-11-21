<?php

namespace App;

use DB;
use Request;
use Illuminate\Database\Eloquent\Model;
use App\Curso;

class Entidades extends Model
{
    protected $table = 'Entidades';


  //  public function user()
  //  {
  //      return $this->belongsTo('App\User');
  //  }

    public function Curso()
    {
        return $this->hasMany('App\Curso');
    }

}