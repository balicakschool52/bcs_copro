<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\CodeReferal;
use App\Http\Requests\StoreCodeReferalRequest;
use App\Http\Requests\UpdateCodeReferalRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CodeReferalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codeReferals = CodeReferal::get();
        return ResponseFormatter::success($codeReferals, 'Code Referal data retrieved successfully');
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
    public function store(StoreCodeReferalRequest $request)
    {
        DB::beginTransaction();
        try {
            $codeReferal = CodeReferal::create([
                'code' => $request->code,
                'discount_type' => $request->discount_type,
                'discount_value' => $request->discount_value,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'quota' => $request->quota,
                'is_active' => $request->is_active,
            ]);
            DB::commit();
            return ResponseFormatter::success($codeReferal, config('messages.SUCCESS_CREATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CodeReferal $codeReferal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CodeReferal $codeReferal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCodeReferalRequest $request, CodeReferal $codeReferal)
    {
        DB::beginTransaction();
        try {
            $codeReferal->update([
                'code' => $request->code,
                'discount_type' => $request->discount_type,
                'discount_value' => $request->discount_value,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'quota' => $request->quota,
                'is_active' => $request->is_active,
            ]);
            DB::commit();
            return ResponseFormatter::success($codeReferal, config('messages.SUCCESS_UPDATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CodeReferal $codeReferal)
    {
        //
    }

    public function check(Request $request)
    {
        $request->validate([
            'code' => ['required', 'string', 'max:30'],
        ]);

        $code = $request->input('code');

        $referal = DB::table('code_referals')
            ->where('code', $code)
            ->whereNull('deleted_at')
            ->where('is_active', true)
            ->first();

        if (!$referal) {
            return ResponseFormatter::error(['valid' => false], 'Kode referral tidak ditemukan / tidak aktif.');
        }

        $now = now();

        if (!empty($referal->start_at) && $now->lt(Carbon::parse($referal->start_at))) {
            return ResponseFormatter::error(['valid' => false], 'Kode referral belum berlaku.');
        }

        if (!empty($referal->end_at) && $now->gt(Carbon::parse($referal->end_at))) {
            return ResponseFormatter::error(['valid' => false], 'Kode referral sudah expired.');
        }

        if (!is_null($referal->quota) && (int) $referal->used_count >= (int) $referal->quota) {
            return ResponseFormatter::error(['valid' => false], 'Kuota kode referral sudah habis.');
        }

        return ResponseFormatter::success([
            'valid' => true,
            'code' => $referal->code,
            'discount_type' => (int) $referal->discount_type,
            'discount_value' => (int) $referal->discount_value,
        ], 'Kode referral valid.');
    }
}
