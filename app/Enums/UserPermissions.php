<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\FlaggedEnum;

/**
 * @method static static FlagOne()
 * @method static static FlagTwo()
 * @method static static FlagThree()
 * @method static static FlagFour()
 * @method static static FlagOneAndTwo()
 * @method static static None()
 */
final class UserPermissions extends FlaggedEnum
{
    const FlagOne = 1 << 0;
    const FlagTwo = 1 << 1;
    const FlagThree = 1 << 2;
    const FlagFour = 1 << 3;

    // Shortcuts
    const FlagOneAndTwo = self::FlagOne | self::FlagTwo;
}
