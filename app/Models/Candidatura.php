<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'nomeCandidato',
        'emailCandidato',
        'idCandidato',
        'idAnuncio',
        'file_path',
        'file_name',
    ];


    public function anuncio(){
        return $this->belongsTo(Empresas::class,'idAnuncio','id');
    }

    public function candidatos()
    {
        return $this->hasMany(User::class, 'idCandidato', 'id');
    }
}
