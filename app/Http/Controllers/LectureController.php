<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreLectureRequest;
use App\Http\Requests\UpdateLectureRequest;
use App\Models\Lecture;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lecture::get();
        return ResponseFormatter::success($data, 'Lecture data retrieved successfully');
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
    public function store(StoreLectureRequest $request)
    {
        DB::beginTransaction();
        try {
            $lecture = Lecture::create([
                'nip' => $request->nip,
                'name' => $request->name,
                'description' => $request->description,
                'photo' => $request->photo,
                'study_program_id' => $request->study_program_id,
                'user_id' => $request->user_id
            ]);
            DB::commit();
            return ResponseFormatter::success($lecture, 'messages.SUCCESS_CREATE');
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLectureRequest $request, Lecture $lecture)
    {
        DB::beginTransaction();
        try {
            $lecture->update([
                'nip' => $request->nip,
                'name' => $request->name,
                'description' => $request->description,
                'photo' => $request->photo,
                'study_program_id' => $request->study_program_id,
                'user_id' => $request->user_id
            ]);
            DB::commit();
            return ResponseFormatter::success($lecture, 'messages.SUCCESS_UPDATE');
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecture $lecture)
    {
        DB::beginTransaction();
        try {
            $lecture->delete();
            DB::commit();
            return ResponseFormatter::success(null, 'messages.SUCCESS_DELETE');
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }
}
