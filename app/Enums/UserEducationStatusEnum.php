<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Student()
 * @method static static Completed()
 * @method static static Canceled()
 */
final class UserEducationStatusEnum extends Enum
{
    const student   = 0;
    const completed = 1;
    const canceled  = 2;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::student => 'Student',
            self::completed => 'Completed',
            self::canceled => 'Canceled',
            default => self::getKey($value),
        };
    }
}
