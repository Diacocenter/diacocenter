<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static Rejected()
 * @method static static Verified()
 */
final class UserDocumentStatusEnum extends Enum
{
    const pending  = 0;
    const verified = 1;
    const rejected = 2;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::pending => 'Pending',
            self::rejected => 'Rejected',
            self::verified => 'Verified',
            default => self::getKey($value),
        };
    }
}
