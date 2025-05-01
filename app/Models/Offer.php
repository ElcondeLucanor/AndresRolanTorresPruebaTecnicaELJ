<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title',
        'description',
        'salary',
        'location',
    ];

    // Relación M:1 con el modelo Application
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    // Relación M:M con el modelo Candidate pivotando en la tabla 'applications'
    public function candidates()
    {
        return $this->belongsToMany(Candidate::class, 'applications');
    }
}
