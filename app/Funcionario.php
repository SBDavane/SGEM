<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    
    protected $fillable = ["primeiro_nome", "ultimo_nome", "activo", "local_id"];

    public function local(){

        return $this->belongsTo('App\Local');

    }
}
