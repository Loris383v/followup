<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'dateNaissance',
        'ageDepistageSurdite',
        'agePremierImplant',
        'ageDeuxiemeImplant',
        'idOrigineSurdite'
    ];

    public function getOrigineSurdite()
    {
        return $this->belongsTo(OrigineSurdite::class, 'idOrigineSurdite');
    }

}
