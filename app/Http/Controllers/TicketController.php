<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowTicketResource;
use App\Models\Event;
use App\Models\Zone;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\ElseIf_;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tickets = Ticket::all();
        $tickets = ShowTicketResource::collection($tickets);
        return response()->json(['message' => 'successfully', 'model' => $tickets],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'event_id' => 'required|numeric',
            'zone_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $event = Event::find(Request('event_id'));
        $event = $event['stadium_id'];
        $zone = Zone::find(Request('zone_id'));
        $ticket = Ticket::where('zone_id', Request('zone_id'))->count();;
        if ($zone['stadium_id'] != $event) {
            return 'That zone is not in that event';
        };
        if( $zone['number_tickets'] <= $ticket ){
            return 'Ticket is already sold in that event';
        };
        $tickets = Ticket::create($validator->validated());
        return response()->json(['message' => 'create ticket successfully', 'ticket' => $tickets], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tickets = Ticket::find($id);
        $tickets = new ShowTicketResource($tickets);
        return response()->json(['message' => 'successfully', 'model' => $tickets],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'event_id' => 'required|numeric',
            'zone_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $event = Event::find(Request('event_id'));
        $event = $event['stadium_id'];
        $zone = Zone::find(Request('zone_id'));
        $ticket = Ticket::where('zone_id', Request('zone_id'))->count();;
        if ($zone['stadium_id'] != $event) {
            return 'That zone is not in that event';
        };
        if( $zone['number_tickets'] <= $ticket ){
            return 'Ticket is already sold in that event';
        };
        $tickets = Ticket::find($id)->update($validator->validated());
        return response()->json(['message' => 'create ticket successfully', 'ticket' => $tickets], 200);
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tickets = Ticket::find($id)->delete;
        return response()->json(['message' => 'delete ticket successfully'],200);
    }
}
