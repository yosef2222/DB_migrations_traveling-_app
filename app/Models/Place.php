<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();

        static::saved(function ($place) {
            $place->updateAverageRating();
        });
    }

    public function updateAverageRating()
    {
        $average = $this->ratings()->avg('rating');
        $this->update(['average_rating' => $average]);
    }
    public function PhotoPlace(): HasMany
    {
        return $this->hasMany(PhotoPlace::class);
    }
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
    public function Wishlist(): BelongsTo
    {
        return $this->belongsTo(Wishlist::class);
    }
}
