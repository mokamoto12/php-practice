<?php

namespace Tests\GiftCard\UseType;

use PHPUnit\Framework\TestCase;
use GiftCard\UseType\UseTypeNotUse;
use GiftCard\UseType\UseTypeInterface;

/**
 * Class UseTypeNotUseTest
 * @package GiftCard\UseType
 */
class UseTypeNotUseTest extends TestCase
{
    private $_availableAmount = 1000;
    private $_someUseAmount = 700;
    /**
     * @var UseTypeNotUse
     */
    private $useTypeNotUse;

    function setUp()
    {
        $this->useTypeNotUse = new UseTypeNotUse($this->_availableAmount, $this->_someUseAmount);
    }

    function testInstanceOf()
    {
        $this->assertTrue($this->useTypeNotUse instanceof UseTypeInterface);
    }

    function testGetUseAmount()
    {
        $this->assertEquals($this->useTypeNotUse->getUseAmount(), 0);
    }
}