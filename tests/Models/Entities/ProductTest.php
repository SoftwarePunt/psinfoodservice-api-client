<?php

namespace Models\Entities;

use PHPUnit\Framework\TestCase;
use SoftwarePunt\PSAPI\Models\Entities\Product;
use SoftwarePunt\PSAPI\Models\Responses\CollectionItem;

class ProductTest extends TestCase
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
        $product = new Product();
        $product->fillFromItem($this->__makeTestCollectionItem(), null);

        $this->assertInstanceOf("SoftwarePunt\PSAPI\Models\Entities\ProductSummary", $product->summary);
        $this->assertSame(988887, $product->summary->id);
    }
}
