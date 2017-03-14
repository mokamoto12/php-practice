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
    const UseTypeUseAll = 1;
    const UseTypeSomeUse = 2;
    const UseTypeNotUse = 0;

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
        $class = __NAMESPACE__ . '\\' . $this->getKey();
        return new $class($availableAmount, $someUseAmount);
    }
}
