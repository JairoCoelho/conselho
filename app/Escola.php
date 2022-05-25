<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $fillable = [
        'nome_escola','cnpj','email','etapas','situacao','ato','credenciamento','vigencia_credenciamento','autorizacao','vigencia_autorizacao'
    ];
}
