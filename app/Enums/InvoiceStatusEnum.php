<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static paid()
 * @method static static Canceled()
 * @method static static Expired()
 */
final class InvoiceStatusEnum extends Enum
{
    const pending  = 0;
    const paid     = 1;
    const canceled = 2;
    const expired  = 3;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::pending => 'Pending',
            self::paid => 'Paid',
            self::canceled => 'Canceled',
            self::expired => 'Expired',
            default => self::getKey($value),
        };
    }
}
