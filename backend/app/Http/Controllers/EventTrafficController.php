<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\JsonResponse;

class EventTrafficController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(CreateEventRequest $request): JsonResponse
    {
        $event = new Event();
        $event->intersection_id = $request->intersection_id;
        $event->traffic_light_id = $request->traffic_light_id;
        $event->light_state_id = $request->light_state_id;
        $event->event = $request->event;
        $event->description = $request->description;
        $event->event_time = now();
        $event->save();

        return response()->json([
            'success' => true,
            // 'data' => $event,
            'message' => 'Event created successfully',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
