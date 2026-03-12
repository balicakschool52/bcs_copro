<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'date',
        'location',
        'photo',
        'is_active',
    ];

    protected static function booted(): void
    {
        static::updating(function (Blog $blog): void {
            if (! $blog->isDirty('photo')) {
                return;
            }

            self::deletePhotoFromDisks($blog->getOriginal('photo'));
        });

        static::deleted(function (Blog $blog): void {
            self::deletePhotoFromDisks($blog->photo);
        });
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
