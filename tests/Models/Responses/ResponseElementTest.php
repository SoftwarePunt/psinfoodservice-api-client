<?php

namespace Models\Responses;

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Models\Responses\ResponseElement;

class ResponseElementTest extends TestCase
{
    private function __makeTestItem(): ResponseElement
    {
        $sampleRaw = file_get_contents(getcwd() . "/tests/samples/search_public_products.xml");
        $xml = simplexml_load_string($sampleRaw);
        $productElement = $xml->xpath("/envelope/body/products/product")[0];
        return new ResponseElement($productElement);
    }

    public function testGetElement()
    {
        $testItem = $this->__makeTestItem();

        $elementResult = $testItem->getElement("summary");

        $this->assertInstanceOf("\SimpleXmlElement", $elementResult);
        $this->assertSame("988887", (string)$elementResult->xpath("id")[0]);
    }

    /**
     * @depends testGetString
     */
    public function testGetItem()
    {
        $testItem = $this->__makeTestItem();

        $itemResult = $testItem->getItem("summary");

        $this->assertInstanceOf("SoftwarePunt\PSAPI\Models\Responses\ResponseElement", $itemResult);
        $this->assertSame("988887", $itemResult->getString("id"));
    }

    public function testGetString()
    {
        $testItem = $this->__makeTestItem();

        $this->assertSame(null, $testItem->getString("bad_key"));
        $this->assertSame("988887", $testItem->getString("summary/id"));
        $this->assertSame("PS Citroensnoepje 20g", $testItem->getString("summary/name"));
        $this->assertSame("PS Citroensnoepje 20g", $testItem->getString("summary/name/value"));
        $this->assertSame(null, $testItem->getString("summary/name/invalid"));
    }

    public function testGetInt()
    {
        $testItem = $this->__makeTestItem();

        $this->assertSame(null, $testItem->getInt("bad_key"));
        $this->assertSame(988887, $testItem->getInt("summary/id"));
    }

    public function testGetFloat()
    {
        $testItem = $this->__makeTestItem();

        $this->assertSame(null, $testItem->getFloat("bad_key"));
        $this->assertSame(20.0, $testItem->getFloat("summary/netweight"));
    }

    public function testGetBool()
    {
        $testItem = $this->__makeTestItem();

        $this->assertSame(false, $testItem->getBool("bad_key"),
            "getBool(): Invalid keys should return false");
        $this->assertSame(true, $testItem->getBool("summary/publiclyvisible"),
            "getBool(): Explicit \"1\" value should return true");
        $this->assertSame(true, $testItem->getBool("summary/id"),
            "getBool(): Non-empty, non-false-equatable value should return true");
    }

    public function testGetDateTime()
    {
        $testItem = $this->__makeTestItem();

        $this->assertSame(null, $testItem->getDateTime("bad_key"));
        $this->assertSame(null, $testItem->getDateTime("summary/id"));

        $this->assertEquals(
            expected: new \DateTime("2021-02-25T10:44:42.313"),
            actual: $testItem->getDateTime("summary/lastupdatedon")
        );
    }
}