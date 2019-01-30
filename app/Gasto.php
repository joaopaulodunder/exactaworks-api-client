<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $table = 'tb_gastos';

    protected $fillable = ['nome', 'descricao', 'data_hora', 'valor', 'tag'];

    protected $dates = ['deleted_at'];

}
