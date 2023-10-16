<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Student()
 * @method static static Completed()
 * @method static static Canceled()
 */
final class GenderStatusEnum extends Enum
{
    const male   = 0;
    const female = 1;
    const notSay  = 2;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::male => 'Male',
            self::female => 'Female',
            self::notSay => 'NotSay',
            default => self::getKey($value),
        };
    }
}
