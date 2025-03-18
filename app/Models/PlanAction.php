<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanAction extends Model
{
    /** @use HasFactory<\Database\Factories\PlanActionFactory> */
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'date',
        'amount',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
