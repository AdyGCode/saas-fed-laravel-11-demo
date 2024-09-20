<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    /**
     * A Chirp belongs to a User
     *
     * @return BelongsTo
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
