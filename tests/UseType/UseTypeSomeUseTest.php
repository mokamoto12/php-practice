<?php

namespace Tests\GiftCard\UseType;

use PHPUnit\Framework\TestCase;
use GiftCard\UseType\UseTypeSomeUse;
use GiftCard\UseType\UseTypeInterface;

/**
 * Class UseTypeSomeUseTest
 * @package GiftCard\UseType
 */
class UseTypeSomeUseTest extends TestCase
{
    private $_availableAmount = 1000;
    private $_someUseAmount = 700;
    /**
     * @var UseTypeNotUse
     */
    private $useTypeSomeUse;

    public function setUp()
    {
        $this->useTypeSomeUse = new UseTypeSomeUse($this->_availableAmount, $this->_someUseAmount);
    }

    public function testInstanceOf()
    {
        $this->assertTrue($this->useTypeSomeUse instanceof UseTypeInterface);
    }

    public function testGetUseAmount()
    {
        $this->assertEquals($this->useTypeSomeUse->getUseAmount(), $this->_someUseAmount);
    }
}
