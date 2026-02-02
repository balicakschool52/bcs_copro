<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\VisionAndMissionObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([VisionAndMissionObserver::class])]
class VisionAndMission extends Model
{
    /** @use HasFactory<\Database\Factories\VisionAndMissionFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];
}
