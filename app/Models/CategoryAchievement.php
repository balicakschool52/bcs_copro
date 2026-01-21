<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryAchievement extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryAchievementFactory> */
    use HasFactory, SoftDeletes;
}
