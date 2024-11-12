<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    //
     use HasFactory;

         /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'goal_booking',
        'drivers',
        'end_time',
        'end_date',
        'start_time',
        'start_date',
        'booking_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'is_deleted',
        'created_at',
        'updated_at',

    ];

}
