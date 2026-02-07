<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreCategoryAchievementRequest;
use App\Http\Requests\UpdateCategoryAchievementRequest;
use App\Models\CategoryAchievement;
use Illuminate\Support\Facades\DB;

class CategoryAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CategoryAchievement::get();
        return ResponseFormatter::success($data, 'Category achievement data retrieved successfully');
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
    public function store(StoreCategoryAchievementRequest $request)
    {
        DB::beginTransaction();
        try {
            $categoryAchievement = CategoryAchievement::create([
                'name' => $request->name
            ]);
            DB::commit();
            return ResponseFormatter::success($categoryAchievement, config('messages.SUCCESS_CREATE'), 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryAchievement $categoryAchievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryAchievement $categoryAchievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryAchievementRequest $request, CategoryAchievement $categoryAchievement)
    {
        DB::beginTransaction();
        try {
            $categoryAchievement->update([
                'name' => $request->name
            ]);
            DB::commit();
            return ResponseFormatter::success($categoryAchievement, config('messages.SUCCESS_UPDATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryAchievement $categoryAchievement)
    {
        DB::beginTransaction();
        try {
            $categoryAchievement->delete();
            DB::commit();
            return ResponseFormatter::success(null, config('messages.SUCCESS_DELETE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }
}
