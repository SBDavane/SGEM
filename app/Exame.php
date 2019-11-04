<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
  protected $fillable = ["nome", "estado", "data_realizacao", "categoria_id", "paciente_id", "local_id"];


  public function categoria()
  {
    return $this->belongsTo('App\Categoria');
  }

  public function local()
  {
    return $this->belongsTo('App\Local');
  }

  public function paciente()
  {
    return $this->belongsTo('App\Paciente');
  }
}
