<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrigineSurdite extends Model
{
    protected $table = 'origineSurdite';
    protected $fillable = [
        'id',
        'natureSurdite'
    ];

    public function getPatients()
    {
        return $this->hasMany(Patient::class, 'idOrigineSurdite');
    }
}
