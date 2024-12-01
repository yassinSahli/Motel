<?php

namespace App\Enum;

enum PersonStatus: string
{
    case MARRIED = 'married';
    case DIVORCED = 'divorced';
    case SINGLE = 'single';
}
