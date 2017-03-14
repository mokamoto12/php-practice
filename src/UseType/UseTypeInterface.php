<?php

namespace GiftCard\UseType;

/**
 * Interface UseTypeInterface
 *
 * @package GiftCard\UseType
 */
interface UseTypeInterface
{
    /**
     * UseTypeInterface constructor.
     *
     * @param int $availableAmount Available Amount
     * @param int $someUseAmount   Some Use Amount
     */
    public function __construct($availableAmount, $someUseAmount);

    /**
     * Get Use Amount
     *
     * @return int
     */
    public function getUseAmount();
}