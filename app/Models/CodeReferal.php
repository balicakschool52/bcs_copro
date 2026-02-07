<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CodeReferal extends Model
{
    /** @use HasFactory<\Database\Factories\CodeReferalFactory> */
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function registrations()
    {
        return $this->hasMany(Registration::class, 'code_referal_id');
    }
}
