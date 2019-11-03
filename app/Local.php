<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = "locais";
    protected $fillable = ["cidade", "nome"];

    public function funcionarios(){

        return $this->hasMany('App\Funcionario');

    }

    public function exames(){

        return $this->hasMany('App\Exame');

    }
}
