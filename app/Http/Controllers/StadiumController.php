<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stadiums = Stadium::all();
        return response()->json(['message' => 'successfully', 'model' => $stadiums],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $stadiums = Stadium::create([
            'name' => Request('name')
        ]);
        return response()->json(['message' => 'update sport successfully', 'model' => $stadiums], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $stadiums = Stadium::find($id);
        return response()->json(['message' => 'successfully', 'model' => $stadiums], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $stadiums = Stadium::find($id)->update([
            'name' => Request('name')
        ]);
        return response()->json(['message' => 'update sport successfully', 'model' => $stadiums], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $stadiums = Stadium::find($id)->delete();
        return response()->json(['message' => 'delete stadium successfully'], 200);
    }
}
