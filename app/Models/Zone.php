<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'stadium_id',
        'number_tickets',
    ];

    public function stadium(): BelongsTo{
        return $this->belongsTo(Stadium::class);
    }
    public function ticket():HasOne{
        return $this->hasOne(Ticket::class);
    }
}
