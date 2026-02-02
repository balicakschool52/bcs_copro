<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreVisionAndMissionRequest;
use App\Http\Requests\UpdateVisionAndMissionRequest;
use App\Models\VisionAndMission;
use Illuminate\Support\Facades\DB;

class VisionAndMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = VisionAndMission::all();
        return ResponseFormatter::success($data, 'Vision and mission data retrieved successfully');
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
    public function store(StoreVisionAndMissionRequest $request)
    {
        DB::beginTransaction();
        try {
            $visionAndMission = VisionAndMission::create([
                'description' => $request->description,
                'type' => $request->type
            ]);

            DB::commit();
            return ResponseFormatter::success($visionAndMission, config('messages.SUCCESS_CREATE'), 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(VisionAndMission $visionAndMission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisionAndMission $visionAndMission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisionAndMissionRequest $request, VisionAndMission $visionAndMission)
    {
        DB::beginTransaction();
        try {
            $visionAndMission->update([
                'description' => $request->description,
                'type' => $request->type
            ]);

            DB::commit();
            return ResponseFormatter::success($visionAndMission, config('messages.SUCCESS_UPDATE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisionAndMission $visionAndMission)
    {
        DB::beginTransaction();
        try {
            $visionAndMission->delete();

            DB::commit();
            return ResponseFormatter::success(null, config('messages.SUCCESS_DELETE'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error(null, $th->getMessage());
        }
    }
}
