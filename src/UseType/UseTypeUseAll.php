<?php

namespace GiftCard\UseType;

/**
 * Class UseTypeUseAll
 * @package GiftCard\UseType
 */
class UseTypeUseAll implements UseTypeInterface
{
    private $availableAmount;
    private $someUseAmount;

    /**
     * UseTypeUseAll constructor.
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
        return $this->availableAmount;
    }
}