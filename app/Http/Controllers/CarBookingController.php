<?php

namespace App\Http\Controllers;

use App\Enums\HttpStatusCode;
use App\Models\CarBooking;
use App\Http\Requests\StoreCarBookingRequest;
use App\Http\Requests\UpdateCarBookingRequest;
use App\Services\CarBookingService\CarBookingService;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;



class CarBookingController extends Controller
{


    protected $_carBookingService;

    public function __construct()
    {
        $this->_carBookingService = new CarBookingService();
    }




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


            $res = $this->_carBookingService->store($request);


            return match ($res['status']) {

                HttpStatusCode::CREATED => response()->json( ['message' => $res['message']], HttpStatusCode::CREATED->value ),

                HttpStatusCode::INTERNAL_SERVER_ERROR => response()->json(['message' => $res['message']],     HttpStatusCode::INTERNAL_SERVER_ERROR->value),

                default => response()->json(['message' => 'Unknown error occurred.'], HttpStatusCode::INTERNAL_SERVER_ERROR->value),
            };

    

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
