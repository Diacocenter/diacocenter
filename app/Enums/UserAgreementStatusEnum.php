<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static Confirmed()
 * @method static static Canceled()
 */
final class UserAgreementStatusEnum extends Enum
{
    const pending   = 0;
    const confirmed = 1;
    const canceled  = 2;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::pending => 'Pending',
            self::confirmed => 'Confirmed',
            self::canceled => 'Canceled',
            default => self::getKey($value),
        };
    }
}
