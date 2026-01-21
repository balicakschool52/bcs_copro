<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\StudyProgramObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([StudyProgramObserver::class])]
class StudyProgram extends Model
{
    /** @use HasFactory<\Database\Factories\StudyProgramFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];
}
