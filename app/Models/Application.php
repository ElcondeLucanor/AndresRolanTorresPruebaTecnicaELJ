<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    protected $fillable = [
        'candidate_id',
        'offer_id',
    ];

    // Relación 1:M con el modelo Offer
    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }

    // Relación 1:M con el modelo Candidate
    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
