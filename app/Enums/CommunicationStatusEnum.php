<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static New()
 * @method static static Pending()
 * @method static static Answered()
 * @method static static Closed()
 */
final class CommunicationStatusEnum extends Enum
{
    const new      = 0;
    const pending  = 1;
    const answered = 2;
    const rating   = 3;
    const closed   = 4;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::new => 'New',
            self::pending => 'Pending',
            self::answered => 'Answered',
            self::rating => 'Rating',
            self::closed => 'Closed',
            default => self::getKey($value),
        };
    }
}
