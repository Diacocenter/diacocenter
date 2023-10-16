<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static onSite()
 * @method static static remote()
 * @method static static hybrid()
 */
final class JobTypeEnum extends Enum
{
    const onSite = 0;
    const remote = 1;
    const hybrid = 2;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::onSite => 'On-Site',
            self::remote => 'Remote',
            self::hybrid => 'Hybrid',
            default => self::getKey($value),
        };
    }
}
