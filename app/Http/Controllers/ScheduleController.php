<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $shedule = Schedule::all();
        return response()->json(['message' => 'successfully', 'model' => $shedule],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $shedule = Schedule::create($validator->validated());
        return response()->json(['message' => 'create schedule successfully', 'model' => $shedule], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $shedule = Schedule::find($id)->update($validator->validated());
        return response()->json(['message' => 'udpate event successfully', 'model' => $shedule], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $shedule = Schedule::find($id)->delete();
        return response()->json(['message' => 'delete schedule id '.$id.' successfully'], 200);
    }
}
