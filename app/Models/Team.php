<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sport_id'
    ];
    public function sport(): BelongsTo{
        return $this->belongsTo(Sport::class);
    }
    public function teamMatches():HasMany{
        return $this->hasMany(TeamMatch::class);
    }
}
