<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowEventResource;
use App\Models\Event;
use App\Models\TeamMatch;
use App\Models\Ticket;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $event = Event::all();
        $event = ShowEventResource::collection($event);
        return response()->json(['message' => 'successfully', 'event' => $event], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'date' => 'required|date_format:Y-m-d',
            'stadium_id' => 'required|numeric',
            'sport_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $event = Event::create($validator->validated());
        
        return response()->json(['message' => 'create event successfully', 'event' => $event], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $event = Event::find($id);
        $event = new ShowEventResource($event);
        return response()->json(['message' => 'Display the specified event successfully', 'event' =>$event], 200);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'date' => 'required|date_format:Y-m-d',
            'stadium_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $event = Event::find($id)->update($validator->validated());
        return response()->json(['message' => 'create event successfully', 'event' => $event], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $event = Event::find($id)->delete();
        return response()->json(['message' => 'delete event id: ' . $id . ' successfully'], 200);
    }

    /**
     * Search event by name of event.
     */
    public function search($event)
    {
        //
        $event = Event::where('name', 'LIKE', '%' . $event . '%')->get();
        return response()->json(['message' => 'search for event is successfully', 'event' => $event], 200);
    }

}
