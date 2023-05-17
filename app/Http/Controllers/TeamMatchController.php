<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowTeamMatchResource;
use App\Models\TeamMatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $TeamMatch = TeamMatch::all();
        $TeamMatch = ShowTeamMatchResource::collection($TeamMatch);
        return response()->json(['message' => 'successfully', 'model' => $TeamMatch],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),([
            'team_id' => 'required|numeric',
            'match_id' => 'required|numeric',
            'schedule_id' => 'required|numeric',
            'event_id' => 'required|numeric',
        ]));
        if ($validator->fails()){
            return $validator->errors();
        }
        $TeamMatch = TeamMatch::create($validator->validated());
        return response()->json(['message' => 'create teamMatch successfully', 'model' => $TeamMatch],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $TeamMatch = TeamMatch::find($id);
        $TeamMatch = new ShowTeamMatchResource($TeamMatch);
        return response()->json(['message' => 'successfully', 'model' => $TeamMatch],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(),([
            'team_id' => 'required|numeric',
            'match_id' => 'required|numeric',
            'schedule_id' => 'required|numeric',
            'event_id' => 'required|numeric',
        ]));
        if ($validator->fails()){
            return $validator->errors();
        }
        $TeamMatch = TeamMatch::find($id)->update($validator->validated());
        return response()->json(['message' => 'create teamMatch successfully', 'model' => $TeamMatch],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $TeamMatch = TeamMatch::find($id)->delete();
        return response()->json(['message' => 'delete teamMatch successfully'],200);
    }
    
}
