<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Models\Education;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Education::with(['studyProgram:id,name,grade,is_active'])->get();
        return ResponseFormatter::success($data, 'Education data retrieved successfully');
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
    public function store(StoreEducationRequest $request)
    {
        DB::beginTransaction();
        try {
            $education = Education::create([
                'description' => $request->description,
                'study_program_id' => $request->study_program_id
            ]);
            DB::commit();
            return ResponseFormatter::success($education, config('messages.SUCCESS_CREATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationRequest $request, Education $education)
    {
        DB::beginTransaction();
        try {
            $education->update([
                'description' => $request->description,
                'study_program_id' => $request->study_program_id
            ]);
            DB::commit();
            return ResponseFormatter::success($education, config('messages.SUCCESS_UPDATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        DB::beginTransaction();
        try {
            $education->delete();
            DB::commit();
            return ResponseFormatter::success(null, config('messages.SUCCESS_DELETE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }
}
