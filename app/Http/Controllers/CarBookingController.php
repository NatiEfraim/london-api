<?php

namespace App\Http\Controllers;

use App\Enums\HttpStatusCode;
use App\Models\CarBooking;
use App\Http\Requests\StoreCarBookingRequest;
use App\Http\Requests\UpdateCarBookingRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;



class CarBookingController extends Controller
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
    public function store(StoreCarBookingRequest $request)
    {
        //
        try {


            CarBooking::create([
            'booking_by' => 1, 
            'start_date' => $request->input('start_date'),
            'start_time' => $request->input('start_time'),
            'end_date' => $request->input('end_date'),
            'end_time' => $request->input('end_time'),
            'drivers' => $request->input('drivers'),
            'goal_booking' => $request->input('goal_booking'),
            ]);

        return response()->json([
            'message' => HttpStatusCode::CREATED->getMessage(),
        ], HttpStatusCode::CREATED->value);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }


        return response()->json(['message' => HttpStatusCode::INTERNAL_SERVER_ERROR->getMessage()], HttpStatusCode::INTERNAL_SERVER_ERROR->value);
    }

    /**
     * Display the specified resource.
     */
    public function show(CarBooking $carBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarBooking $carBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarBookingRequest $request, CarBooking $carBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarBooking $carBooking)
    {
        //
    }
}
