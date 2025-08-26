<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailTrafficLightRequest;
use App\Models\TrafficLight;
use Illuminate\Http\Request;
use App\Http\Requests\TrafficLightRequest;

class TrafficLightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TrafficLightRequest $request)
    {
        $trafficLights = TrafficLight::query()
        ->join('intersections', 'traffic_lights.intersection_id', '=', 'intersections.id')
        ->select(
            'traffic_lights.*',
            'intersections.name as intersection_name'
        );

        $searchIntersectionName = $request->input('search_intersection_name');
        if ($searchIntersectionName !== null && $searchIntersectionName !== '') {
            $trafficLights->where('intersections.name', 'LIKE', '%' . $searchIntersectionName . '%');
        }

        $searchDirection = $request->input('search_direction');
        if ($searchDirection !== null && $searchDirection !== '') {
            $trafficLights->where('traffic_lights.direction', 'LIKE', '%' . $searchDirection . '%');
        }

        $results = $trafficLights->get();

        return response()->json([
            'status' => 'success',
            'data' => $results,
            'message' => 'Traffic lights retrieved successfully',
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailTrafficLightRequest $request)
    {
        $trafficLight = TrafficLight::where('id', $request->id)->first();

        return response()->json([
            'status' => 'success',
            'data' => $trafficLight,
            'message' => 'Traffic light retrieved successfully',
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrafficLight $trafficLight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrafficLight $trafficLight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrafficLight $trafficLight)
    {
        //
    }
}
