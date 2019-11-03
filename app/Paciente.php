<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ["nome_completo", "data_nascimente"];


    public function exames(){

        return $this->hasMany('App\Exame');

    }
}
