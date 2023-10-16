<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Student()
 * @method static static Completed()
 * @method static static Canceled()
 */
final class ProjectStatusEnum extends Enum
{
    const applied   = 0;
    const accepted = 1;
    const completed  = 2;
    const canceled  = 3;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::applied => 'Applied',
            self::accepted => 'Accepted',
            self::completed => 'Completed',
            self::canceled => 'Canceled',
            default => self::getKey($value),
        };
    }
}
