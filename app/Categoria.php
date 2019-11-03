<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
        protected $fillable = ["designacao"];

        public function exames(){

        $this->hasMany('App\Exame');

    }
}
