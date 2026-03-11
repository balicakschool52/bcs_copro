<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\RegistrationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([RegistrationObserver::class])]
class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];

    protected $casts = [
        'status' => 'string',
        'date_of_birth' => 'date',
    ];

    public function codeReferal()
    {
        return $this->belongsTo(CodeReferal::class, 'code_referal_id');
    }
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }
}
