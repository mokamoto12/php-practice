<?php

namespace Tests\GiftCard\UseType;

use PHPUnit\Framework\TestCase;
use GiftCard\UseType\UseTypeEnum;
use GiftCard\UseType\UseTypeNotUse;
use GiftCard\UseType\UseTypeSomeUse;
use GiftCard\UseType\UseTypeUseAll;

/**
 * Class UseTypeEnumTest
 * @package GiftCard\UseType
 */
class UseTypeEnumTest extends TestCase
{
    public function testCreateNotUse()
    {
        $enum = new UseTypeEnum(UseTypeEnum::NOT_USE);
        $this->assertTrue($enum->create(0, 0) instanceof UseTypeNotUse);
    }

    public function testCreateSomeUse()
    {
        $enum = new UseTypeEnum(UseTypeEnum::SOME_USE);
        $this->assertTrue($enum->create(0, 0) instanceof UseTypeSomeUse);
    }

    public function testCreateUseAll()
    {
        $enum = new UseTypeEnum(UseTypeEnum::USE_ALL);
        $this->assertTrue($enum->create(0, 0) instanceof UseTypeUseAll);
    }
}
