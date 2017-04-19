<?php

namespace GiftCard;

use GiftCard\UseType\UseTypeEnum;

/**
 * Class GiftCard
 *
 * @package GiftCard\GiftCard
 */
class GiftCard
{
    /**
     * @var \GiftCard\UseType\UseTypeInterface
     */
    private $useType;

    /**
     * GiftCard constructor.
     *
     * @param int $giftCardType
     * @param int $availableAmount
     * @param int $inputtedAmount
     */
    public function __construct($giftCardType, $availableAmount, $inputtedAmount)
    {
        $useTypeEnum = UseTypeEnum::values()[$giftCardType];
        $this->useType = $useTypeEnum->create($availableAmount, $inputtedAmount);
    }

    /**
     * Get Use Amount
     *
     * @return int
     */
    public function getUseAmount()
    {
        return $this->useType->getUseAmount();
    }
}