<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    protected $table = 'indicador';

     public function competencia()
    {
        return $this ->belongsTo(Competencia::class, 'compe_id');
    }
}
