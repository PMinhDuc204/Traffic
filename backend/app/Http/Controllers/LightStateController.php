<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailLightStateRequest;
use App\Models\LightState;
use Illuminate\Http\Request;
use App\Http\Requests\LightStateRequest;
use App\Http\Requests\FindLightStateRequest;

class LightStateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FindLightStateRequest $request)
    {
        $lightStates = LightState::query()
        ->join('intersections', 'light_states.intersection_id', '=', 'intersections.id')
        ->join('traffic_lights', 'light_states.traffic_light_id', '=', 'traffic_lights.id')
        ->select(
            'light_states.*',
            'intersections.name as intersection_name',
            'traffic_lights.direction as traffic_light_direction'
        );

        $searchIntersectionName = $request->input('search_intersection_name');
        if ($searchIntersectionName !== null && $searchIntersectionName !== '') {
            $lightStates->where('intersections.name', 'LIKE', '%' . $searchIntersectionName . '%');
        }

        $searchTrafficLightName = $request->input('search_traffic_light_name');
        if ($searchTrafficLightName !== null && $searchTrafficLightName !== '') {
            $lightStates->where('traffic_lights.name', 'LIKE', '%' . $searchTrafficLightName . '%');
        }

        $searchState = $request->input('search_state');
        if ($searchState !== null && $searchState !== '') {
            $lightStates->where('light_states.state', 'LIKE', '%' . $searchState . '%');
        }

        $results = $lightStates->get();

        return response()->json([
            'status' => 'success',
            'data' => $results,
            'message' => 'Light states retrieved successfully',
        ], 200);
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
    public function store(LightStateRequest $request)
    {
        LightState::where('intersection_id', $request->intersection_id)
        ->where('traffic_light_id', $request->traffic_light_id)
        ->whereNull('end_time')
        ->update(['end_time' => now()]);

        $lightState = new LightState();
        $lightState->intersection_id = $request->intersection_id;
        $lightState->traffic_light_id = $request->traffic_light_id;
        $lightState->state = $request->state;
        $lightState->start_time = $request->start_time;

        $lightState->save();

        return response()->json([
            'status' => 'success',
            'data' => $lightState,
            'message' => 'Light state created successfully',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailLightStateRequest $request)
    {
        $lightState = LightState::where('id', $request->id)->first();
        return response()->json([
            'status' => 'success',
            'data' => $lightState,
            'message' => 'Light state retrieved successfully',
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LightState $lightState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LightState $lightState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LightState $lightState)
    {
        //
    }
}
