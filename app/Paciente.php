<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $fillable = ["nome_completo", "data_nascimento", "nid"];


  public function exames()
  {

    return $this->hasMany('App\Exame');
  }
}
