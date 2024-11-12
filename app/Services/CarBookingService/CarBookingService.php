<?php

namespace App\Services\CarBookingService;

use App\Enums\HttpStatusCode;
use App\Http\Requests\StoreCarBookingRequest;
use App\Models\CarBooking;
use Illuminate\Support\Facades\Log;


class CarBookingService{



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

            return [

                'status' => HttpStatusCode::CREATED,

                'message' => HttpStatusCode::CREATED->getMessage(),

            ];   
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }


        return response()->json(['message' => HttpStatusCode::INTERNAL_SERVER_ERROR->getMessage()], HttpStatusCode::INTERNAL_SERVER_ERROR->value);
    }

}