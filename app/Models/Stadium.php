<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Stadium extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function events(): HasMany{
        return $this->hasMany(Event::class);
    }
    public function zones(): HasMany{
        return $this->hasMany(Zones::class);
    }
}
