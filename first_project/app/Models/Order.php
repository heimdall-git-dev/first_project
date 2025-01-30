<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        "date",
        "total_price",
        "user_id",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function dish(): HasMany
    {
        return $this->hasMany(dish::class);
    }
}
