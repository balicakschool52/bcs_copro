<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\AchievementObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([AchievementObserver::class])]
class Achievement extends Model
{
    /** @use HasFactory<\Database\Factories\AchievementFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];
}
