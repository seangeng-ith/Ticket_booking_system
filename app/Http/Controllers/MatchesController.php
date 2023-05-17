<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matches = Matches::all();
        return response()->json(['message' => 'successfully', 'event' => $matches], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $matches = Matches::create([
            'description' => request('description'),
        ]);
        return response()->json(['message' => 'create match successfully', 'event' => $matches], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $matches = Matches::find($id);
        return response()->json(['message' => ' successfully', 'event' => $matches], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $matches = Matches::find($id)->update([
            'description' => request('description'),
        ]);
        return response()->json(['message' => 'create match successfully', 'event' => $matches], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $matches = Matches::find($id)->delete();
        return response()->json(['message' => 'delete match successfully', 'event' => $matches], 200);
    
    }
}
