<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nome_empresa','posicao','categoria','pais','distrito','requisitos','tipo','contacto','empresas_id'];
}
