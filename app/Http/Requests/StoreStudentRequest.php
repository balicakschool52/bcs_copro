<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
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
            'nim' => ['required', 'string', Rule::unique('students')->whereNull('deleted_at')],
            'name' => ['required', 'string'],
            'study_program_id' => ['required', 'exists:study_programs,id'],
            'user_id' => ['required', 'exists:users,id', Rule::unique('students')->whereNull('deleted_at')],
        ];
    }
}
