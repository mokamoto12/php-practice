<?php

namespace GiftCard\UseType;

/**
 * Class UseTypeSomeUse
 * @package GiftCard\UseType
 */
class UseTypeSomeUse implements UseTypeInterface
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
        return $this->someUseAmount;
    }
}