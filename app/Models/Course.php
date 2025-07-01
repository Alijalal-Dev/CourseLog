<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'platform',
        'payment_date',
        'note',
        'user_id',
        'payment',
        'category'
    ];

    protected $casts = [
        'payment_date' => 'date',
        'payment' => 'decimal:2'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
