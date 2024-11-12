<?php

namespace App\Enums;

enum StatusBooking: int
{
    //
    case PENDING = 1;
    case APPROVED = 2;
    case CANCELD = 3;
    case INVALID = -1;
}
