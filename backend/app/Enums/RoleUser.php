<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class RoleUser extends Enum
{
    public const ADMIN = 'admin';
    public const OPERATOR = 'operator';
    public const USER = 'user';
}
