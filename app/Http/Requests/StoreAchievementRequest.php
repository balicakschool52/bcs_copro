<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAchievementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'date' => ['required', 'date'],
            'proof' => ['required', 'string'],
            'photo' => ['required', 'string'],
            'description' => ['required', 'string'],
            'student_id' => ['required', 'exists:students,id'],
            'category_achievement_id' => ['required', 'exists:category_achievements,id'],
        ];
    }
}
