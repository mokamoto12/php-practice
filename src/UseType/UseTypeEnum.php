<?php

namespace GiftCard\UseType;

use MyCLabs\Enum\Enum;

/**
 * Class UseTypeEnum
 *
 * @package GiftCard\UseType
 */
class UseTypeEnum extends Enum
{
    const USE_ALL = UseTypeUseAll::class;
    const SOME_USE = UseTypeSomeUse::class;
    const NOT_USE = UseTypeNotUse::class;

    /**
     * Create UseType Instance
     *
     * @param int $availableAmount Available Amount
     * @param int $someUseAmount   Some Use Amount
     *
     * @return UseTypeInterface
     */
    public function create($availableAmount, $someUseAmount)
    {
        $class = $this->getValue();
        return new $class($availableAmount, $someUseAmount);
    }
}
