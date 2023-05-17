<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Team = Team::all();
        return response()->json(['message' => 'successfully', 'model' => $Team],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'sport_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $Team = Team::create($validator->validated());
        return response()->json(['message' =>'create team succesfully', 'Team' => $Team]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $Team = Team::find($id);
        return response()->json(['message' => 'successfully', 'Team' => $Team], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'sport_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $Team = Team::find($id)->update($validator->validated());
        return response()->json(['message' =>'create team succesfully', 'Team' => $Team]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $Team = Team::find($id)->delete();
        return response()->json(['message' => 'delete successfully'], 200);
    }
}
