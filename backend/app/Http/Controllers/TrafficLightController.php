<?php

namespace App\Http\Controllers;

use App\Models\TrafficLight;
use Illuminate\Http\Request;

class TrafficLightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trafficLights = TrafficLight::query();

        $searchName = request()->input('name');
        if ($searchName !== null && $searchName !== '') {
            $trafficLights->where('name', 'LIKE', '%' . $searchName . '%');
        }

        $searchLocation = request()->input('location');
        if ($searchLocation !== null && $searchLocation !== '') {
            $trafficLights->where('location', 'LIKE', '%' . $searchLocation . '%');
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
    public function show(TrafficLight $trafficLight)
    {
        //
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
