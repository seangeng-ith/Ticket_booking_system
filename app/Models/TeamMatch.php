<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TeamMatch extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'match_id',
        'schedule_id',
        'event_id',
    ];
    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }
    public function match(): BelongsTo{
        return $this->belongsTo(Matches::class);
    }
    public function schedule(): BelongsTo{
        return $this->belongsTo(Schedule::class);
    }
    public function event(): BelongsTo{
        return $this->belongsTo(Event::class);
    }
}
