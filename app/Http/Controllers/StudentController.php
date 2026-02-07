<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::get();
        return ResponseFormatter::success($data, 'Student data retrieved successfully');
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
    public function store(StoreStudentRequest $request)
    {
        DB::beginTransaction();
        try {
            $student = Student::create([
                'nim' => $request->nim,
                'name' => $request->name,
                'study_program_id' => $request->study_program_id,
                'user_id' => $request->user_id
            ]);
            DB::commit();
            return ResponseFormatter::success($student, config('messages.SUCCESS_CREATE'), 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        DB::beginTransaction();
        try {
            $student->update([
                'nim' => $request->nim,
                'name' => $request->name,
                'study_program_id' => $request->study_program_id,
                'user_id' => $request->user_id
            ]);
            DB::commit();
            return ResponseFormatter::success($student, config('messages.SUCCESS_UPDATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        DB::beginTransaction();
        try {
            $student->delete();
            DB::commit();
            return ResponseFormatter::success(null, config('messages.SUCCESS_DELETE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }
}
