<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class EventType extends Enum
{
    public const ERROR = 'error';
    public const MAINTENANCE = 'maintenance';
    public const OVERRIDE = 'override';
    public const POWERFAILURE = 'powerfailure';
}

