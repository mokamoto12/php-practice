<?php

namespace Tests\GiftCard\UseType;

use PHPUnit\Framework\TestCase;
use GiftCard\UseType\UseTypeUseAll;
use GiftCard\UseType\UseTypeInterface;

/**
 * Class UseTypeUseAllTest
 * @package GiftCard\UseType
 */
class UseTypeUseAllTest extends TestCase
{
    private $_availableAmount = 1000;
    private $_someUseAmount = 700;
    /**
     * @var UseTypeUseAll
     */
    private $useTypeUseAll;

    public function setUp()
    {
        $this->useTypeUseAll = new UseTypeUseAll($this->_availableAmount, $this->_someUseAmount);
    }

    public function testInstanceOf()
    {
        $this->assertTrue($this->useTypeUseAll instanceof UseTypeInterface);
    }

    public function testGetUseAmount()
    {
        $this->assertEquals($this->useTypeUseAll->getUseAmount(), $this->_availableAmount);
    }
}
