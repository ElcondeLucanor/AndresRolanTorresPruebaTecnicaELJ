<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'birthday',
        'location',
        'location_is_eu',
    ];

    // Relación M:1 con el modelo Application
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    // Relación M:M con el modelo Candidate pivotando en la tabla 'applications'
    public function offers()
    {
        return $this->belongsToMany(Offer::class, 'applications');
    }
}
