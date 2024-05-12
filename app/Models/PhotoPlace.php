<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotoPlace extends Model
{
    use HasFactory;
    public function Place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
