<?php

namespace Models;

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Models\AbstractParams;
use SoftwarePunt\PSAPI\Models\Enums\ContentType;

class AbstractParamsTest extends TestCase
{
    public function testValues()
    {
        $params = new AbstractParamsTest_TestImpl();
        $params->PropWithValue = "test";

        $this->assertEquals(
            expected: [
                'PropWithValue' => 'test',
                'PropWithDefaultValue' => 'abc',
                'Skip' => 0,
                'Take' => 10,
                'ReturnContentType' => ContentType::Xml
            ],
            actual: $params->toPostData()
        );
    }
}

class AbstractParamsTest_TestImpl extends AbstractParams
{
    public string $PropWithValue = "value123";
    public string $PropWithDefaultValue = "abc";
    public bool $PropWithNoValue;
}