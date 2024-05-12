<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlist extends Model
{
    use HasFactory;
    public function Place(): HasMany
    {
        return $this->hasMany(Place::class);
    }
    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
