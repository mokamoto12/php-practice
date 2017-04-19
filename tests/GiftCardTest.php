<?php

namespace Tests\GiftCard;

use \PHPUnit\Framework\TestCase;
use GiftCard\GiftCard;

/**
 * Class GiftCardTest
 *
 * @package GiftCard
 */
class GiftCardTest extends TestCase
{
    private $typeNotUse = 'NOT_USE';
    private $typeSomeUse = 'SOME_USE';
    private $typeUseAll = 'USE_ALL';
    private $availableAmount = 1000;
    private $inputtedAmount = 700;
    /**
     * @var \GiftCard\UseType\UseTypeNotUse
     */
    private $giftCardNotUse;
    /**
     * @var \GiftCard\UseType\UseTypeSomeUse
     */
    private $giftCardSomeUse;
    /**
     * @var \GiftCard\UseType\UseTypeUseAll
     */
    private $giftCardUseAll;

    function setUp()
    {
        $this->giftCardNotUse = new GiftCard($this->typeNotUse, $this->availableAmount, $this->inputtedAmount);
        $this->giftCardSomeUse = new GiftCard($this->typeSomeUse, $this->availableAmount, $this->inputtedAmount);
        $this->giftCardUseAll = new GiftCard($this->typeUseAll, $this->availableAmount, $this->inputtedAmount);
    }

    function testGetUseAmountNotUse()
    {
        $this->assertEquals($this->giftCardNotUse->getUseAmount(), 0);
    }

    function testGetUseAmountSomeUse()
    {
        $this->assertEquals($this->giftCardSomeUse->getUseAmount(), $this->inputtedAmount);
    }

    function testGetUseAmountUseAll()
    {
        $this->assertEquals($this->giftCardUseAll->getUseAmount(), $this->availableAmount);
    }
}
