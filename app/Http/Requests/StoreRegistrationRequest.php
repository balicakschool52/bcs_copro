<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StoreRegistrationRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', Rule::unique('registrations')->whereNull('deleted_at')],
            'address' => ['required', 'string'],
            'place_of_birth' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:16'],
            'email' => ['required', 'email', 'max:100', Rule::unique('registrations')->whereNull('deleted_at')],
            'previous_school' => ['required', 'string', 'max:255'],
            'graduation_year' => ['required', 'digits:4'],
            'study_program_id' => ['required', 'integer', 'exists:study_programs,id'],
            'reference' => ['required', 'string', 'max:255'],
            'referral_code' => ['nullable', 'string', 'max:30'],
            'payment_proof' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'Nama sudah digunakan.',
            'email.unique' => 'Email sudah digunakan.',
        ];
    }


    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            $code = $this->input('referral_code');
            if (!$code) {
                return;
            }

            $referal = DB::table('code_referals')
                ->where('code', $code)
                ->whereNull('deleted_at')
                ->where('is_active', true)
                ->first();

            if ($referal) {
                if ((string) $referal->discount_type === '1') {
                    $fee = 200000; // samakan dengan fee di RegistrationController
                    $discountAmount = (int) floor($fee * ((int) $referal->discount_value / 100));
                    $final = $fee - min($discountAmount, $fee);

                    if ($final > 0 && !$this->filled('payment_proof')) {
                        $validator->errors()->add('payment_proof', 'Bukti pembayaran wajib.');
                    }
                } else {
                    // fixed amount discount
                    $fee = 200000; // samakan dengan fee di RegistrationController
                    $discountAmount = (int) $referal->discount_value;
                    $final = $fee - min($discountAmount, $fee);

                    if ($final > 0 && !$this->filled('payment_proof')) {
                        $validator->errors()->add('payment_proof', 'Bukti pembayaran wajib.');
                    }
                }
            }
        });
    }
}
