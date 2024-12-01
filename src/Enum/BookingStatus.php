<?php

namespace App\Enum;

enum BookingStatus: string
{
    case PENDING = 'pending';
    case CANCELED = 'canceled';
    case ACCEPTED = 'accepted';
}
