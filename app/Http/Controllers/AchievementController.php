<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;
use App\Models\Achievement;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Achievement::all();
        return ResponseFormatter::success($data, 'Achievement data retrieved successfully');
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
    public function store(StoreAchievementRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = Achievement::create([
                'title' => $request->title,
                'date' => $request->date,
                'proof' => $request->proof,
                'photo' => $request->photo,
                'description' => $request->description,
                'student_id' => $request->student_id,
                'category_achievement_id' => $request->category_achievement_id
            ]);
            DB::commit();
            return ResponseFormatter::success($data, config('messages.SUCCESS_CREATE'), 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        DB::beginTransaction();
        try {
            $achievement->update([
                'title' => $request->title,
                'date' => $request->date,
                'proof' => $request->proof,
                'photo' => $request->photo,
                'description' => $request->description,
                'student_id' => $request->student_id,
                'category_achievement_id' => $request->category_achievement_id
            ]);
            DB::commit();
            return ResponseFormatter::success($achievement, config('messages.SUCCESS_UPDATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        DB::beginTransaction();
        try {
            $achievement->delete();

            DB::commit();
            return ResponseFormatter::success(null, config('messages.SUCCESS_DELETE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }
}
