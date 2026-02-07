<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::get();
        return ResponseFormatter::success($registrations, 'Registration data retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();

            $fee = 200000;
            $code = $data['referral_code'] ?? null;

            $referal = null;
            $discountAmount = 0;

            if ($code) {
                // LOCK row agar quota aman (harus dalam transaksi)
                $referal = DB::table('code_referals')
                    ->where('code', $code)
                    ->whereNull('deleted_at')
                    ->where('is_active', true)
                    ->lockForUpdate()
                    ->first();

                if (!$referal) {
                    throw new \Exception('Kode referral tidak ditemukan / tidak aktif.');
                }

                $now = now();

                if (!empty($referal->start_at) && $now->lt(Carbon::parse($referal->start_at))) {
                    throw new \Exception('Kode referral belum berlaku.');
                }

                if (!empty($referal->end_at) && $now->gt(Carbon::parse($referal->end_at))) {
                    throw new \Exception('Kode referral sudah expired.');
                }

                if (!is_null($referal->quota) && (int) $referal->used_count >= (int) $referal->quota) {
                    throw new \Exception('Kuota kode referral sudah habis.');
                }

                // hitung diskon
                if ($referal->discount_type === '1') {
                    $discountAmount = (int) floor($fee * ((int) $referal->discount_value / 100));
                } else {
                    $discountAmount = (int) $referal->discount_value;
                }

                $discountAmount = min($discountAmount, $fee);

                // update used_count
                DB::table('code_referals')
                    ->where('id', $referal->id)
                    ->update([
                        'used_count' => DB::raw('used_count + 1'),
                        'updated_at' => now(),
                    ]);
            }

            $final = $fee - $discountAmount;

            $registrationId = DB::table('registrations')->insertGetId([
                'name' => $data['name'],
                'address' => $data['address'],
                'place_of_birth' => $data['place_of_birth'],
                'date_of_birth' => $data['date_of_birth'],
                'phone_number' => $data['phone_number'],
                'email' => $data['email'],
                'previous_school' => $data['previous_school'],
                'graduation_year' => $data['graduation_year'],
                'study_program_id' => $data['study_program_id'],

                // pastikan kolom ini nullable di DB kalau referral optional
                'code_referal_id' => $referal?->id,
                'reference' => $data['reference'],
                'referral_code_input' => $code,

                // ini butuh kolom baru kalau kamu ingin simpan nilai fee/diskon
                'registration_fee' => $fee,
                'discount_amount' => $discountAmount,
                'final_amount' => $final,
                'payment_proof' => $data['payment_proof'] ?? null,

                'status' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit();

            return ResponseFormatter::success([
                'registration_id' => $registrationId,
                'reference' => $data['reference'],
                'fee' => $fee,
                'discount' => $discountAmount,
                'final' => $final,
                'referral_code' => $code,
            ], 'Pendaftaran berhasil.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
