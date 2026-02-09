<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CategoryAchievementController;
use App\Http\Controllers\CodeReferalController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\VisionAndMissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('vision-and-missions', VisionAndMissionController::class);
Route::resource('category-achievements', CategoryAchievementController::class);
Route::resource('achievements', AchievementController::class);
Route::resource('students', StudentController::class);
Route::resource('study-programs', StudyProgramController::class);
Route::resource('code-referals', CodeReferalController::class);
Route::post('code-referals/check', [CodeReferalController::class, 'check']);
Route::resource('registrations', RegistrationController::class);
Route::resource('educations', EducationController::class);
