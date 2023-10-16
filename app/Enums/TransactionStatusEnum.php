<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static pending()
 * @method static static failed()
 * @method static static completed()
 */
final class TransactionStatusEnum extends Enum
{
    const pending = 0;
    const failed = 1;
    const completed = 2;


    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::pending => 'Pending',
            self::failed => 'Failed',
            self::completed => 'Completed',
            default => self::getKey($value),
        };
    }
}
