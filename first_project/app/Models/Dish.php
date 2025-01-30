<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dish extends Model
{
    protected $fillable = [
        "name",
        "price",
        "description",
        "picture",
        "category_id",
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
