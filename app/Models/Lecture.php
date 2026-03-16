<?php

namespace App\Models;

use App\Models\Traits\GlobalModelRelation;
use App\Observers\LectureObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([LectureObserver::class])]
class Lecture extends Model
{
    /** @use HasFactory<\Database\Factories\LectureFactory> */
    use HasFactory, SoftDeletes, GlobalModelRelation;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::updating(function (Lecture $lecture): void {
            if (! $lecture->isDirty('photo')) {
                return;
            }

            self::deletePhotoFromDisks($lecture->getOriginal('photo'));
        });

        static::deleted(function (Lecture $lecture): void {
            self::deletePhotoFromDisks($lecture->photo);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studyProgram(): BelongsTo
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }

    protected static function deletePhotoFromDisks(?string $path): void
    {
        if (blank($path)) {
            return;
        }

        Storage::disk('public')->delete($path);
        Storage::disk('local')->delete($path);
    }
}
