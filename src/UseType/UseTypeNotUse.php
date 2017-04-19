<?php

namespace GiftCard\UseType;

/**
 * Class UseTypeNotUse
 * @package GiftCard\UseType
 */
class UseTypeNotUse implements UseTypeInterface
{
    private $availableAmount;
    private $someUseAmount;

    /**
     * UseTypeSomeUse constructor.
     *
     * @param int $availableAmount
     * @param int $someUseAmount
     */
    public function __construct($availableAmount, $someUseAmount)
    {
        $this->availableAmount = $availableAmount;
        $this->someUseAmount = $someUseAmount;
    }

    /**
     * Get Use Amount
     *
     * @return int
     */
    public function getUseAmount()
    {
        return 0;
    }
}