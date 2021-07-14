<?php

namespace Models\Entities;

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Models\Entities\Productsummary;
use SoftwarePunt\PSAPI\Models\Responses\CollectionItem;

class ProductSummaryTest extends TestCase
{
    private function __makeTestCollectionItem(): CollectionItem
    {
        $sampleRaw = file_get_contents(getcwd() . "/tests/samples/search_public_products.xml");
        $xml = simplexml_load_string($sampleRaw);
        $productElement = $xml->xpath("/envelope/body/products/product")[0];
        return new CollectionItem($productElement);
    }

    public function testReadFromCollectionItem()
    {
        $productSummary = new Productsummary();
        $productSummary->fillFromItem($this->__makeTestCollectionItem(), "summary/");

        $this->assertSame(988887, $productSummary->id);
        $this->assertSame("PS Citroensnoepje 20g", $productSummary->name);
        $this->assertSame("1213456789125", $productSummary->ean);
        $this->assertSame(2.000000000000000e+001, $productSummary->netweight);
        $this->assertSame("gram", $productSummary->netcontentunitofmeasure);
        $this->assertSame(2.000000000000000e+001, $productSummary->netcontent);
        $this->assertSame("gram", $productSummary->netcontentunitofmeasure);
        $this->assertSame(2135, $productSummary->brandid);
        $this->assertSame("PS demo", $productSummary->brandname);
        $this->assertEquals(new \DateTime("2021-02-25T10:44:42.313"), $productSummary->lastupdatedon);
        $this->assertSame("https://permalink.psinfoodservice.com/prod/image/233697/A604D8B1-5A0A-4E49-A3B6-E1EDFCB14D3D?w=250&h=250", $productSummary->packshot);
        $this->assertSame(true, $productSummary->publiclyvisible);
        $this->assertSame(1, $productSummary->targetmarketid);
        $this->assertSame("NL", $productSummary->targetmarketisocode);
    }
}
