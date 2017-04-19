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
    private $availableAmount = 1000;
    private $someUseAmount = 700;
    /**
     * @var UseTypeSomeUse
     */
    private $useTypeSomeUse;

    public function setUp()
    {
        $this->useTypeSomeUse = new UseTypeSomeUse($this->availableAmount, $this->someUseAmount);
    }

    public function testInstanceOf()
    {
        $this->assertTrue($this->useTypeSomeUse instanceof UseTypeInterface);
    }

    public function testGetUseAmount()
    {
        $this->assertEquals($this->useTypeSomeUse->getUseAmount(), $this->someUseAmount);
    }
}
