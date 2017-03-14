<?php

namespace GiftCard\UseType;

/**
 * Class UseTypeSomeUse
 * @package GiftCard\UseType
 */
class UseTypeSomeUse implements UseTypeInterface
{
    private $_availableAmount;
    private $_someUseAmount;

    /**
     * UseTypeSomeUse constructor.
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
        return $this->_someUseAmount;
    }
}