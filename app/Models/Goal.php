<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Goal extends Model
{
    /** @use HasFactory<\Database\Factories\GoalFactory> */
    use HasFactory;

    protected $fillable = [
        'step_id',
        'contract',
        'daily_target',
        'weekly_target',
        'monthly_target',
        'daily_stop',
        'weekly_stop',
        'monthly_stop',
    ];

    public function step(): BelongsTo
    {
        return $this->belongsTo(Step::class);
    }

    public function plan(): HasMany
    {
        return $this->hasMany(Plan::class);
    }
}
