<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Step extends Model
{
    /** @use HasFactory<\Database\Factories\StepFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }

    public function goals(): HasMany
    {
        return $this->hasMany(Goal::class);
    }
}
