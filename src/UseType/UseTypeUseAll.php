<?php

namespace GiftCard\UseType;

/**
 * Class UseTypeUseAll
 * @package GiftCard\UseType
 */
class UseTypeUseAll implements UseTypeInterface
{
    private $_availableAmount;
    private $_someUseAmount;

    /**
     * UseTypeUseAll constructor.
     *
     * @param int $availableAmount
     * @param int $someUseAmount
     */
    public function __construct($availableAmount, $someUseAmount)
    {
        $this->_availableAmount = $availableAmount;
        $this->_someUseAmount = $someUseAmount;
    }

    /**
     * Get Use Amount
     *
     * @return int
     */
    public function getUseAmount()
    {
        return $this->_availableAmount;
    }
}