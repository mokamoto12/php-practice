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
    function testCreateNotUse()
    {
        $enum = new UseTypeEnum(UseTypeEnum::UseTypeNotUse);
        $this->assertTrue($enum->create(0, 0) instanceof UseTypeNotUse);
    }

    function testCreateSomeUse()
    {
        $enum = new UseTypeEnum(UseTypeEnum::UseTypeSomeUse);
        $this->assertTrue($enum->create(0, 0) instanceof UseTypeSomeUse);
    }

    function testCreateUseAll()
    {
        $enum = new UseTypeEnum(UseTypeEnum::UseTypeUseAll);
        $this->assertTrue($enum->create(0, 0) instanceof UseTypeUseAll);
    }
}
