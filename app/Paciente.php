<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ["nome_completo", "data_nascimente", "nid"];


    public function exames(){

        return $this->hasMany('App\Exame');

    }
}
