<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCodeReferalRequest extends FormRequest
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
            'code' => ['required', 'string', Rule::unique('code_referals')->ignore($this->code_referal->id)->whereNull('deleted_at')],
            'discount_type' => ['required',  Rule::in(['1', '2'])],
            'discount_value' => ['required', 'numeric', 'min:0'],
            'start_at' => ['required', 'date'],
            'end_at' => ['required', 'date', 'after:start_at'],
            'quota' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['required', 'boolean']
        ];
    }
}
