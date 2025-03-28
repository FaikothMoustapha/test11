<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Stagiaires extends Model
{
    protected $fillable = [
        'nomStag',
        'prenStag',
        'datNais',
        'adrStag',
        'genre',
        'email',
        'tel',
        'datDebut',
        'datFin' ,
        'theme',
        'ecole_id',
        'filiere_id',
        'type_stage_id',
    ];
    
    protected $casts = [
        
        'datNais'=>'datetime',
        
        'datDebut'=>'datetime',
        'datFin'=>'datetime',
        
    ];

    public function filiere()
    {
        return $this->belongsTo(Filieres::class,'filiere_id');
    }
    public function ecole()
    {
        return $this->belongsTo(Ecoles::class,'ecole_id');
    }

}
