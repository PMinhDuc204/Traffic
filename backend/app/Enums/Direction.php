<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Direction extends Enum
{
    public const NORTH = 'north';
    public const SOUTH = 'south';
    public const EAST = 'east';
    public const WEST = 'west';
}
