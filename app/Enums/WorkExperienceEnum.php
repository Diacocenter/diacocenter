<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class WorkExperienceEnum extends Enum
{
    const working   = 0;
    const completed = 1;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::working => 'Working',
            self::completed => 'Completed',
            default => self::getKey($value),
        };
    }
}
