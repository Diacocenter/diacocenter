<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Private()
 * @method static static Friends()
 * @method static static Public()
 */
final class PermissionLevelEnum extends Enum
{
    const public = 0;
    const friends = 1;
    const private = 2;


    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::private => 'Private',
            self::friends => 'Friends',
            self::public => 'Public',
            default => self::getKey($value),
        };
    }
}
