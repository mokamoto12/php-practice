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

    public function setUp()
    {
        $this->useTypeNotUse = new UseTypeNotUse($this->_availableAmount, $this->_someUseAmount);
    }

    public function testInstanceOf()
    {
        $this->assertTrue($this->useTypeNotUse instanceof UseTypeInterface);
    }

    public function testGetUseAmount()
    {
        $this->assertEquals($this->useTypeNotUse->getUseAmount(), 0);
    }
}