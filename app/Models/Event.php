<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'stadium_id',
        'sport_id',
        
    ];

    public function stadium(): BelongsTo{
        return $this->belongsTo(Stadium::class);
    }
    public function teamMatches(): HasMany{
        return $this->hasMany(TeamMatch::class);
    }
    public function sport(): BelongsTo{
        return $this->belongsTo(Sport::class);
    }
    public function tickets(): HasMany{
        return $this->hasMany(Ticket::class);
    }
}
