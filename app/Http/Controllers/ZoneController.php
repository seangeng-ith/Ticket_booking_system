<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowZoneResource;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $zones = Zone::all();
        $zones = ShowZoneResource::collection($zones);
        return response()->json(['message' => 'successfully', 'model' => $zones],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),([
            'name' => 'required|max:20',
            'stadium_id' => 'required|numeric',
            'number_tickets' => 'required|numeric',
        ]));
        if ($validator->fails()){
            return $validator->errors();
        }
        $zones = Zone::create($validator->validated());
        return response()->json(['message' => 'create zone successfully', 'model' => $zones],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $zones = Zone::find($id);
        $zones = new ShowZoneResource($zones);
        return response()->json(['message' => 'successfully', 'model' => $zones],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(),([
            'name' => 'required|max:20',
            'stadium_id' => 'required|numeric',
            'number_tickets' => 'required|numeric',
        ]));
        if ($validator->fails()){
            return $validator->errors();
        }
        $zones = Zone::find($id)->update($validator->validated());
        return response()->json(['message' => 'create zone successfully', 'model' => $zones],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $zones = Zone::find($id)->delete();
        return response()->json(['message' => 'delete successfully', 'model' => $zones],200);
    }
}
