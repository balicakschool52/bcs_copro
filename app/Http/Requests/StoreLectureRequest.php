<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLectureRequest extends FormRequest
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
            'nip' => ['required', 'string', Rule::unique('lectures')->whereNull('deleted_at')],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'photo' => ['required', 'string'],
            'study_program_id' => ['required', 'string', 'exists:study_programs,id'],
            'user_id' => ['required', 'exists:users,id', Rule::unique('lectures')->whereNull('deleted_at')],
        ];
    }
}
