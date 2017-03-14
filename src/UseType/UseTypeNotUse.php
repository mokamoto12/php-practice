<?php

namespace GiftCard\UseType;

/**
 * Class UseTypeNotUse
 * @package GiftCard\UseType
 */
class UseTypeNotUse implements UseTypeInterface
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
        return 0;
    }
}