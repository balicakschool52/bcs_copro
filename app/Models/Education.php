<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\EducationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([EducationObserver::class])]
class Education extends Model
{
    /** @use HasFactory<\Database\Factories\EducationFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
}
