<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\CategoryAchievementObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([CategoryAchievementObserver::class])]
class CategoryAchievement extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryAchievementFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];
}
