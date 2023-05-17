<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowSportResource;
use App\Models\Sport;
use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sport = Sport::all();
        $sport = ShowSportResource::collection($sport);
        return response()->json(['message' => 'successfully', 'model' => $sport],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'sport' => 'required|max::225',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $sport = Sport::create($validator->validated());
        return response()->json(['message' => 'create sport successfully', 'model' => $sport], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sport = Sport::find($id);
        $sport = new ShowSportResource($sport);
        return response()->json(['message' => 'successfully', 'model' => $sport], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'sport' => 'required|max::225',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $sport = Sport::find($id)->update($validator->validated());
        return response()->json(['message' => 'update sport successfully', 'model' => $sport], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sport = Sport::find($id)->delete();
        return response()->json(['message' => 'Delete sport id: '.$id.' successfully'], 200);
    }
}
