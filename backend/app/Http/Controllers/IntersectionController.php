<?php

namespace App\Http\Controllers;

use App\Models\Intersection;
use Illuminate\Http\Request;
use App\Http\Requests\FindIntersectionRequest;

class IntersectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FindIntersectionRequest $request)
    {
        //
        $intersections = Intersection::query();

        $searchName = $request->input('search_name');
        if ($searchName !== null && $searchName !== '') {
            $intersections->where('name', 'LIKE', '%' . $searchName . '%');
        }

        $searchLocation = $request->input('search_location');
        if ($searchLocation !== null && $searchLocation !== '') {
            $intersections->where('location', 'LIKE', '%' . $searchLocation . '%');
        }

        $results = $intersections->get();

        return response()->json([
            'status' => 'success',
            'data' => $results,
            'message' => 'Intersections retrieved successfully',
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
    public function show(Intersection $intersection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intersection $intersection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intersection $intersection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intersection $intersection)
    {
        //
    }
}
